<?php
/**
 * 默认入口
 * @author shaopengwei@hotmail.com
 * @since 2016-1-15
 */
class IndexController extends BaseController{
	private $objSmarty = NULL;

	function __construct($smarty){
		$this->objSmarty = $smarty;
	}

	public function index(){
		$this->test();
		$this->objSmarty->display('index/index.tpl');
	}

	public function about(){
		$this->objSmarty->display('index/about.tpl');
	}

	public function blog(){
		$this->objSmarty->display('index/blog.tpl');
	}

	public function contact(){
		$this->objSmarty->display('index/contact.tpl');
	}
}