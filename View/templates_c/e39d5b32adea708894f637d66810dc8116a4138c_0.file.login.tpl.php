<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-19 04:23:59
  from "/Users/mafengwo/webroot/My_MVC/View/templates/user/login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_569dba5f5c9a55_10758449',
  'file_dependency' => 
  array (
    'e39d5b32adea708894f637d66810dc8116a4138c' => 
    array (
      0 => '/Users/mafengwo/webroot/My_MVC/View/templates/user/login.tpl',
      1 => 1453177436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569dba5f5c9a55_10758449 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>	
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<?php echo '<script'; ?>
 src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo '<script'; ?>
>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
<?php echo '</script'; ?>
>
<!--SIGN UP-->
<h1>klasikal Login Form</h1>
<div class="login-form">
	<div class="close"> </div>
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
		<div class="clear"> </div>
	<div class="avtar">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
/avtar.png" />
	</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/user/dologin" method="post">
		<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
		<div class="key">
			<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		</div>
		<div class="signin">
			<input type="submit" value="Login" >
		</div>
	</form>
</div>
 <div class="copy-rights">
	<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="这是我的test">这是我的test</a> - Collect from <a href="http://www.cssmoban.com/" title="这是我的test" target="_blank">这是我的test</a></p>
</div>

</body>
</html><?php }
}
