<?php
	/**
	* 登录控制器
	*/
	class LoginAction extends Action
	{
		/**
		 * 登录视图加载
		 */
		public function index()
		{
			# code...
			$this->display('huaxi-midical');
		}
		/**
		 * 登录逻辑处理
		 * @return [type]
		 */
		public function login()
		{
			if(!IS_POST) halt('页面不存在');

			//从huaxi-midical表单里提取数据
			$username = I('id');
			$pwd = I('pwd','','md5');//对密码进行MD5加密后放入$pwd里

			//对输入的用户名在数据库进行检索，检索出来的结果放到$user里
			$user = M('user')->where(array('username'=>$username))->find();
//判断用户名或者密码是否正确
			if(!$user||$user['passward'] != $pwd){
				$this->error('账号或密码错误,请重试');
			}
//如果用户被锁定也不能登录
			if($user['lock']){
				$this->error('用户被锁定');
			}

			//接下来修改数据表中相应的用户表的数据
			$data = array(
				'id' => $user['id'],
				'logintime' => time(),
				'loginip' => get_client_ip(),
				);
//数据库的hd_user表里保存修改的数据
			M('user')->save($data);


			//然后向session里写入数据
			session('uid',$user['id']);
			session('username',$user['username']);
			session('logintime',date('Y-m-d H:i:s',$user['logintime']));
			session('loginip',$user['loginip']);

			//然后跳转到Index控制器，然后Index控制器加载doctor-page页面
			$this->redirect('Index/index');
		}

	}

?>