<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//加载Tpl/huaxi.html
		$this->display('doctor-page');
    }
/*
处理医生填写的基本信息的页面

*/
    public function handle_pannel1(){
		//判断是否是post提交，如果不是，跳转到Index/index控制器
    	if(!IS_POST) _404('页面不存在',U('index'));


    	$data_basic = array(
				'name'=>I('name',''),
				'sex'=>I('sex',''),
				'age'=>I('age',''),
				'current_job_place'=>I('current_job_place',''),
				'contacts'=>I('contacts','')
			);
// echo $data_basic;
// die;

		if( M('huaxi')->data($data_basic)->add()){//如果填写信息成功
				$this->success('填写成功，请完善其他信息','Index/index');//发布成功，跳转到Index/index控制器
			}else{//发布失败
				$this->error('填写失败，请重试...');
			}

    }

/*

处理临床技能信息的页面方法
*/

    public function handle_pannel2(){
		//判断是否是post提交，如果不是，跳转到Index/index控制器
    	if(!IS_POST) _404('页面不存在',U('index'));


    	$data_basic2 = array(
				'edu'=>I('edu',''),
				'edu_exp'=>I('edu_exp',''),
				're-edu_exp'=>I('re-edu_exp',''),
				'working_time'=>I('working_time',''),
				'working_exp'=>I('working_exp',''),
				'highest_title'=>I('highest_title',''),
				'highest_pos'=>I('highest_pos',''),
				'highest_title_place'=>I('highest_title_place',''),
				'highest_pos_place'=>I('highest_pos_place','')
			);

// echo $data_basic2;
// die;

		if( M('huaxi2')->data($data_basic2)->add()){//如果填写信息成功
				$this->success('填写成功，请完善其他信息','Index/index');//发布成功，跳转到Index/index控制器
			}else{//发布失败
				$this->error('填写失败，请重试...');
			}

    }

/*
处理诊所基本信息的方法
*/

    public function handle_pannel3(){
		//判断是否是post提交，如果不是，跳转到Index/index控制器
    	if(!IS_POST) _404('页面不存在',U('index'));


    	$data_basic3 = array(
				'area'=>I('area',''),
				'hardware_inv'=>I('hardware_inv',''),
				'hardware_inv2'=>I('hardware_inv2',''),
				'sales'=>I('sales',''),
				'medical_quantity'=>I('medical_quantity',''),
				'staff_ratio'=>I('staff_ratio','')
			);

// echo $data_basic2;
// die;

		if( M('huaxi3')->data($data_basic3)->add()){//如果填写信息成功
				$this->success('填写成功，请完善其他信息','Index/index');//发布成功，跳转到Index/index控制器
			}else{//发布失败
				$this->error('填写失败，请重试...');
			}

    }
}