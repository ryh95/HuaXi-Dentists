<?php
	class RegisterAction extends Action {
		/**
		 * 注册页面加载
		 * @return [type]
		 */
		public function index(){
			$this->display('huaxi-midical-register');
		}

		/**
		 * 注册逻辑处理
		 */
		public function register(){

			//从表单中提取数据
			$data = array(
				'username'=>I('username',''),
				'passward'=>I('pwd','','md5'),
				'logintime'=>time(),
				'loginip'=>get_client_ip(),
				'lock'=>0
				);

			//将数据插入到数据库中
			if( M('user')->data($data)->add()){//如果填写信息成功
				$this->success('注册成功','../Login/index');//发布成功，跳转到Index/index控制器
			}else{//发布失败
				$this->error('注册失败，请重试...');
			}


		}
	}
?>