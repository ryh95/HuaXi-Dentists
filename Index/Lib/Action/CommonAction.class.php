<?php
	/**
	 * 用于判定是否是通过登录页面进入后台
	 */
	class CommonAction extends Action{

		public function _initialize(){
			//判定的方法基于seesion机制
			if(!isset($_SESSION['uid']) || !isset($_SESSION['username'])){
				//进入了这个判断说明没有session即没有通过登录进入后台
				//页面跳转到登录页
				$this->redirect('Login/index');
			}
		}


	}
?>