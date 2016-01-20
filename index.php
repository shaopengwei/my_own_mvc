<?php
/**
 * 我的MVC框架入口
 * 在这里进行路由分发，定位到Contrller控制器中
 */
session_start();
header("Content-type:text/html;charset=utf-8");
date_timezone_set("Asia/Shanghai");

//定义全局变量
define('WEB_ROOT', dirname(__FILE__));
define('APP_PATH', str_replace($_SERVER['DOCUMENT_ROOT'], '', WEB_ROOT));
define('CSS_PATH', APP_PATH.'/View/css');
define('JS_PATH', APP_PATH.'/View/js');
define('IMG_PATH', APP_PATH.'/View/images');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'shao');

//新建Smarty类
require_once "Libs/Smarty/Smarty.class.php";
$objSmarty = new Smarty();
$objSmarty->template_dir = "View/templates/";
$objSmarty->compile_dir = "View/templates_c/";
$objSmarty->cache_dir = "View/cache/";
$objSmarty->left_delimiter = "{*";
$objSmarty->right_delimiter = "*}";
$objSmarty->assign('app_path', APP_PATH);
$objSmarty->assign('css_path', CSS_PATH);
$objSmarty->assign('js_path', JS_PATH);
$objSmarty->assign('img_path', IMG_PATH);

//包含Controller基类
require_once "Controller/BaseController.class.php";

//使用query_string的简单路由: 
//your.domain.name/index.php(使用rewrite隐藏)/controller/function/variable1/value1...
$strInfo = $_SERVER['REQUEST_URI'];
$strPathInfo = str_replace(APP_PATH.'/', '', $strInfo);
if(strlen($strPathInfo) > 0){
	$arrUseInfo = explode('/', $strPathInfo);
}else{
	$arrUseInfo = array('index', 'index');
}
if(file_exists("Controller/$arrUseInfo[0]Controller.class.php")){
	require_once "Controller/$arrUseInfo[0]Controller.class.php";
 	$strClassName = $arrUseInfo[0].Controller;
 	$classDo = new $strClassName($objSmarty);
 	if(method_exists($classDo, $arrUseInfo[1])){
		$param = array();
		for($i=2; $i<count($arrUseInfo); $i++){
			$param[] = $arrUseInfo[$i];
		}
		$classDo->$arrUseInfo[1]($param);
 	}else{
		echo '您访问的方法不存在！跳转到默认页中。。。';
	}
}else{
	echo '您访问的模块不存在！跳转到默认页中。。。';
}


