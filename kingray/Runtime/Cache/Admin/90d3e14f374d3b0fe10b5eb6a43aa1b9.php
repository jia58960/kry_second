<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>后台登入页</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/reset.css" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/style.css" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/invalid.css" />		
		<!-- Internet Explorer Fixes Stylesheet -->
			
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
	</head>
  
<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="__PUBLIC__/Admin/Images/logo.png" alt="" />
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<form action="__URL__/checkLogin" method="post">				
					<div class="notification information png_bg">
						<div>
							键入完整的用户名密码以登入
						</div>
					</div>
					
					<p>
						<label>用户名：</label>
						<input class="text-input" type="text" name="admin_name" />
					</p>
					<div class="clear"></div>
					<p>
						<label>密&nbsp;&nbsp;&nbsp;码：</label>
						<input class="text-input" type="password" name="admin_pas"/>
					</p>
					<div class="clear"></div>
					<!--<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>-->
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="登入" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
</body>
</html>