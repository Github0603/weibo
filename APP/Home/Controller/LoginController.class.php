<?php 
namespace Home\Controller;
use Think\Controller;
use Think\Verify;


	class LoginController extends Controller{

		/**
		 * 登录页面视图
		 * @return [type] [description]
		 */
		public function index(){

			$this->display();
		}


		/**
		 * 注册页面视图
		 * @return [type] [description]
		 */
		public function register(){

			$this->display();
		}

		/**
		 * 生成验证码
		 * @return [type] [description]
		 */
		public function verify(){
			$config = array(
				 'length'    =>  4,               // 验证码位数
				);
			$verify = new Verify($config);
			$verify->entry();
		}






	}

 ?>