<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
 <head>
		
		<meta charset="utf-8" />
		
		<title>后台管理中心</title>
        
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/style.css" />
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/simpla.jquery.configuration.js"></script>
		
			
	</head>
    <body>
    <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="http://www.sz-kingray.com">金瑞亿</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="index.html"><img id="logo" src="__PUBLIC__/Admin/Images/logo.png" alt="KingRay CMS Logo" style="border:none;"/></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">admin</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="kry.formlolol.com:27080" title="去到网站" target="_blank">去网站</a> | <a href="#" title="Sign Out">登出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
               
                
				<li>
					<a href="#" class="nav-top-item">
						导航管理
					</a>
					<ul>
						<li><a href="__GROUP__/Navigation/add" target="main">添加导航</a></li>
						<li><a href="__GROUP__/Navigation/edit" target="main">编辑导航</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						文章管理				</a>
					<ul>
						<li><a href="__GROUP__/Article/add" target="main">添加文章</a></li>
						<li><a href="__GROUP__/Article/edit" target="main">文章管理</a></li>
					</ul>
				</li>
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
    </body>
    </html>