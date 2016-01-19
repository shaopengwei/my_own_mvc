<?php
/**
 * 用户控制器层
 * @author shaopengwei@hotmail.com
 * @since 2016-1-15
 */
class UserController{
	private $objSmarty = NULL;

	/**
	 * 构造函数
	 */
	function __construct($smarty){
		$this->objSmarty = $smarty;
	}

	/**
	 * 显示登录页面
	 */
	public function Login(){
		$this->objSmarty->display('user/login.tpl');
	}

	public function doLogin(){

	}
}