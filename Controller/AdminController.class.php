<?php
/**
 * Admin控制器层
 * @author shaopengwei@hotmail.com
 * @since 2016-1-15
 */
class AdminController{
	private $objSmarty = NULL;

	function __construct($smarty){
		$this->objSmarty = $smarty;
	}

	public function admin(){
		$this->objSmarty->assign('info', '这是管理后台！');
		$this->objSmarty->display('admin/index.tpl');
	}
}