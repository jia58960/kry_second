<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="金瑞亿官网, 金瑞亿投资发展有限公司, 投融资" name="description" />
        <meta content="jia58960" name="author" />
        <title>
           深圳市金瑞亿投资发展有限公司
        </title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/bootstrap/css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/fancybox/source/jquery.fancybox.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/revolution_slider/css/rs-style.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/revolution_slider/rs-plugin/css/settings.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/plugins/bxslider/jquery.bxslider.css" />

        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/style-metronic.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/style.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/themes/blue.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/style-responsive.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/custom.css" />
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/jquery-1.8.3.min.js"></script>       
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/jquery-migrate-1.2.1.min.js"></script>
        
        <link rel="shortcut icon" href="favicon.ico" />

    </head>
    
    <body class="page-header-fixed">
   		<!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>选择主题</p>
            <ul class="inline">
                <li class="color-blue current color-default" data-style="blue"></li>
                <li class="color-red" data-style="red"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
            </ul>
            <label>
                <span>头部</span>
                <select class="header-option form-control input-small">
                    <option value="default" selected>Default</option>
                    <option value="fixed">Fixed</option>
                </select>
            </label>
        </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->     

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default no-scrolling-fixed navbar-fixed-top">
        <!-- BEGIN TOP BAR -->
        <div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <ul class="list-unstyle inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span>(0755) 66659000</span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span>lzd@sz-kingray.com</span></li>
                        </ul>
                    </div>
                    <!-- 登录与注册<div class="col-md-3 col-sm-3 login-reg-links">
                        <ul class="list-unstyled inline">
                            <li><a href="page_login.html">Login</a></li>
                            <li class="sep"><span>|</span></li>
                            <li><a href="page_signup.html">Signup</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->

        <div class="container">
            <div class="navbar-header">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN LOGO (you can use logo image instead of text)-->
                <a class="navbar-brand logo-v1" href="__URL__/index">
                    <img src="__PUBLIC__/Home/default/Images/nav_logo.png" id="logoimg" alt="">
                </a>
                <!-- END LOGO -->
            </div>
        
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                            <a href="<?php echo ($menu["homeurl"]); ?>">
                            首页
                        </a>
                        
                    </li>
                    
                    <?php if(is_array($menu["nav"])): $i = 0; $__LIST__ = $menu["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navr): $mod = ($i % 2 );++$i;?><li class="dropdown">
                        <a class="dropdown-toggle" data-hover="dropdown"  href="<?php echo ($navr["url"]); ?>">
                            <?php echo ($navr["nav_name"]); ?>

                            <i class="fa fa-angle-down"></i>                            
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(is_array($navr["sub"])): $i = 0; $__LIST__ = $navr["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo ($vo["url"]); ?>" title="">
                                    <?php echo ($vo["nav_name"]); ?>
                                   </a>
                                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>

                        <div class="search-box">
                            <form action="#">
                                <div class="input-group input-large">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn theme-btn">Go</button>
                                    </span>
                                </div>
                            </form>
                        </div> 
                    </li>
                </ul>                         
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
        </div>

    </div>


		<?php if((BROWSER) == "true"): ?><div id="browser">
				<p style="font-size:16px">我们的站点使用了最新HTML5的相关技术，但您的浏览器不支持这些技术，我们推荐您使用<a href="http://www.google.cn/intl/zh-CN/chrome/browser/"> Google Chrome </a>浏览器来访问。</p>
			</div><?php endif; ?>
		<script>
			if(<?php echo (BROWSER); ?>==true){
				window.onload=function(){
					$('#browser').delay(7000).fadeOut("slow");
				};
			}
		</script>

        <div class="page-container">

            <!-- BEGIN REVOLUTION SLIDER -->    
            <div class="fullwidthbanner-container slider-main">
                <div class="fullwidthabnner">
                    <ul id="revolutionul" style="display:none;">
                            <!-- THE NEW SLIDE -->
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="__PUBLIC__/Home/default/Images/sliders/revolution/thumbs/thumb2.jpg">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img src="__PUBLIC__/Home/default/Images/pix/slide1.jpg" alt="">
                                
                                <div class="caption lft slide_title_white slide_item_left"
                                     data-x="30"
                                     data-y="90"
                                     data-speed="400"
                                     data-start="1500"
                                     data-easing="easeOutExpo">
                                     Explore the Power<br><span class="slide_title_white_bold">of Metronic</span>
                                </div>
                                <div class="caption lft slide_subtitle_white slide_item_left"
                                     data-x="87"
                                     data-y="245"
                                     data-speed="400"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                     This is what you were looking for
                                </div>
                                <a class="caption lft btn dark slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                                     data-x="187"
                                     data-y="315"
                                     data-speed="400"
                                     data-start="3000"
                                     data-easing="easeOutExpo">
                                     Purchase Now!
                                </a>                        
                                <div class="caption lfb"
                                     data-x="640" 
                                     data-y="0" 
                                     data-speed="700" 
                                     data-start="1000" 
                                     data-easing="easeOutExpo"  >
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/lady.png" alt="Image 1">
                                </div>
                            </li>            
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="__PUBLIC__/Home/default/Images/sliders/revolution/thumbs/thumb2.jpg">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img src="__PUBLIC__/Home/default/Images/pix/slide2.jpg" alt="">
                                
                                <div class="caption lft slide_title slide_item_left"
                                     data-x="0"
                                     data-y="105"
                                     data-speed="400"
                                     data-start="1500"
                                     data-easing="easeOutExpo">
                                     Need a website design ? 
                                </div>
                                <div class="caption lft slide_subtitle slide_item_left"
                                     data-x="0"
                                     data-y="180"
                                     data-speed="400"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                     This is what you were looking for
                                </div>
                                <div class="caption lft slide_desc slide_item_left"
                                     data-x="0"
                                     data-y="220"
                                     data-speed="400"
                                     data-start="2500"
                                     data-easing="easeOutExpo">
                                     Lorem ipsum dolor sit amet, dolore eiusmod<br>
                                     quis tempor incididunt. Sed unde omnis iste.
                                </div>
                                <a class="caption lft btn green slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                                     data-x="0"
                                     data-y="290"
                                     data-speed="400"
                                     data-start="3000"
                                     data-easing="easeOutExpo">
                                     Purchase Now!
                                </a>                        
                                <div class="caption lfb"
                                     data-x="640" 
                                     data-y="55" 
                                     data-speed="700" 
                                     data-start="1000" 
                                     data-easing="easeOutExpo"  >
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/man-winner.png" alt="Image 1">
                                </div>
                            </li>

                            <!-- THE SECOND SLIDE -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="__PUBLIC__/Home/default/Images/sliders/revolution/thumbs/thumb2.jpg">                        
                                <img src="__PUBLIC__/Home/default/Images/pix/slide3.jpg" alt="">
                                <div class="caption lfl slide_title slide_item_left"
                                     data-x="0"
                                     data-y="125"
                                     data-speed="400"
                                     data-start="3500"
                                     data-easing="easeOutExpo">
                                     Powerfull & Clean
                                </div>
                                <div class="caption lfl slide_subtitle slide_item_left"
                                     data-x="0"
                                     data-y="200"
                                     data-speed="400"
                                     data-start="4000"
                                     data-easing="easeOutExpo">
                                     Responsive Admin & Website Theme
                                </div>
                                <div class="caption lfl slide_desc slide_item_left"
                                     data-x="0"
                                     data-y="245"
                                     data-speed="400"
                                     data-start="4500"
                                     data-easing="easeOutExpo">
                                     Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                                </div>                        
                                <div class="caption lfr slide_item_right" 
                                     data-x="635" 
                                     data-y="105" 
                                     data-speed="1200" 
                                     data-start="1500" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/mac.png" alt="Image 1">
                                </div>
                                <div class="caption lfr slide_item_right" 
                                     data-x="580" 
                                     data-y="245" 
                                     data-speed="1200" 
                                     data-start="2000" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/ipad.png" alt="Image 1">
                                </div>
                                <div class="caption lfr slide_item_right" 
                                     data-x="735" 
                                     data-y="290" 
                                     data-speed="1200" 
                                     data-start="2500" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/iphone.png" alt="Image 1">
                                </div>
                                <div class="caption lfr slide_item_right" 
                                     data-x="835" 
                                     data-y="230" 
                                     data-speed="1200" 
                                     data-start="3000" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/macbook.png" alt="Image 1">
                                </div>
                                <div class="caption lft slide_item_right" 
                                     data-x="865" 
                                     data-y="45" 
                                     data-speed="500" 
                                     data-start="5000" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/hint1-blue.png" id="rev-hint1" alt="Image 1">
                                </div>                        
                                <div class="caption lfb slide_item_right" 
                                     data-x="355" 
                                     data-y="355" 
                                     data-speed="500" 
                                     data-start="5500" 
                                     data-easing="easeOutBack">
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/hint2-blue.png" id="rev-hint2" alt="Image 1">
                                </div>

                            </li>
                            
                            <!-- THE THIRD SLIDE -->
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="__PUBLIC__/Home/default/Images/sliders/revolution/thumbs/thumb2.jpg">
                                <img src="__PUBLIC__/Home/default/Images/sliders/revolution/bg3.jpg" alt="">
                                <div class="caption lfl slide_item_left" 
                                     data-x="20" 
                                     data-y="95" 
                                     data-speed="400" 
                                     data-start="1500" 
                                     data-easing="easeOutBack">
                                     <iframe src="http://player.vimeo.com/video/56974716?portrait=0" width="420" height="240" style="border:0" allowFullScreen></iframe> 
                                </div>
                                <div class="caption lfr slide_title"
                                     data-x="470"
                                     data-y="100"
                                     data-speed="400"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                     Responsive Video Support
                                </div>
                                <div class="caption lfr slide_subtitle"
                                     data-x="470"
                                     data-y="170"
                                     data-speed="400"
                                     data-start="2500"
                                     data-easing="easeOutExpo">
                                     Youtube, Vimeo and others.
                                </div>
                                <div class="caption lfr slide_desc"
                                     data-x="470"
                                     data-y="220"
                                     data-speed="400"
                                     data-start="3000"
                                     data-easing="easeOutExpo">
                                     Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                                </div>
                                <a class="caption lfr btn yellow slide_btn" href=""
                                     data-x="470"
                                     data-y="280"
                                     data-speed="400"
                                     data-start="3500"
                                     data-easing="easeOutExpo">
                                     Watch more Videos!
                                </a>
                            </li>               
                            
                            <!-- THE FORTH SLIDE -->
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="__PUBLIC__/Home/default/Images/sliders/revolution/thumbs/thumb2.jpg">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img src="__PUBLIC__/Home/default/Images/sliders/revolution/bg4.jpg" alt="">                        
                                 <div class="caption lft slide_title"
                                     data-x="0"
                                     data-y="105"
                                     data-speed="400"
                                     data-start="1500"
                                     data-easing="easeOutExpo">
                                     What else included ?
                                </div>
                                <div class="caption lft slide_subtitle"
                                     data-x="0"
                                     data-y="180"
                                     data-speed="400"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                     The Most Complete Admin Theme
                                </div>
                                <div class="caption lft slide_desc"
                                     data-x="0"
                                     data-y="225"
                                     data-speed="400"
                                     data-start="2500"
                                     data-easing="easeOutExpo">
                                     Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                                </div>
                                <a class="caption lft slide_btn btn red slide_item_left" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank" 
                                     data-x="0"
                                     data-y="300"
                                     data-speed="400"
                                     data-start="3000"
                                     data-easing="easeOutExpo">
                                     Learn More!
                                </a>                        
                                <div class="caption lft start"  
                                     data-x="670" 
                                     data-y="55" 
                                     data-speed="400" 
                                     data-start="2000" 
                                     data-easing="easeOutBack"  >
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/iphone_left.png" alt="Image 2">
                                </div>
                                
                                <div class="caption lft start"  
                                     data-x="850" 
                                     data-y="55" 
                                     data-speed="400" 
                                     data-start="2400" 
                                     data-easing="easeOutBack"  >
                                     <img src="__PUBLIC__/Home/default/Images/sliders/revolution/iphone_right.png" alt="Image 3">
                                </div>                        
                            </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->

            <!--BEGIN Body content-->
            <div class="container">
                
                <!-- BEGIN SERVICE BOX -->   
                <div class="row service-box">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-location-arrow blue"></i></em>
                            <span>关于我们</span>
                        </div>
                        <p><?php echo (msubstr(strip_tags($about["content"]),0,120)); ?></p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-check red"></i></em>
                            <span>为您服务</span>
                        </div>
                        <p><?php echo (msubstr(nl2br($service1["content"]),0,120)); ?></p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="fa fa-user green"></i></em>
                            <span>合作伙伴</span>
                        </div>
                        <p><?php echo (msubstr(strip_tags($choose["content"]),0,120)); ?></p>
                    </div>
                </div>
                <!-- END SERVICE BOX -->  
                <div class="clearfix"></div>

                <!-- BEGIN RECENT WORKS -->
                <div class="row recent-work margin-bottom-40">
                    <div class="col-md-3">
                        <h2><a href="portfolio.html">最近大事</a></h2>
                        <p>公司最近发生的大事项等</p>
                    </div>
                    <div class="col-md-9">
                        <ul class="bxslider">
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img1.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img2.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img3.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img4.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img5.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img6.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img3.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                            <li>
                                <em>
                                    <img src="__PUBLIC__/Home/default/Images/works/img4.jpg" alt="" />
                                    <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                    <a href="__PUBLIC__/Home/default/Images/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                                </em>
                                <a class="bxslider-block" href="#">
                                    <strong>Amazing Project</strong>
                                    <b>Agenda corp.</b>
                                </a>
                            </li>
                        </ul>        
                    </div>
                </div>   
                <!-- END RECENT WORKS -->

                <div class="clearfix"></div>

                <!-- BEGIN CLIENTS -->
                <div class="row margin-bottom-40">
                    <div class="col-md-3">
                        <h2><a href="#">Our Clients</a></h2>
                        <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
                    </div>
                    <div class="col-md-9">
                        <ul class="bxslider1 clients-list">
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_1_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_1.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_2_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_2.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_3_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_3.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_4_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_4.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_5_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_5.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">                        
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_6_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_6.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_7_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_7.png" class="color-img" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">                        
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_8_gray.png" alt="" /> 
                                    <img src="__PUBLIC__/Home/default/Images/clients/client_8.png" class="color-img" alt="" />
                                </a>
                            </li>
                        </ul>                        
                    </div>
                </div>
                <!-- END CLIENTS -->
            


            </div>
            <!--END Body content-->

        </div>
        
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN ABOUT -->                    
                    <h2>关于我们</h2>
                    <p class="margin-bottom-30">金瑞亿是一家为国内外大型企业提供专业供应链服务解决方案的服务商，并为服务对象打造一个集商流、物流、资金流、信息流一体化运作的供应链整合服务平台。</p>
                    <div class="clearfix"></div>                    
                    <!-- END ABOUT -->          
                </div>
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN CONTACTS -->                                    
                    <h2>联系我们</h2>
                    <address class="margin-bottom-40">
                        创新科技广场Ⅱ期, 西座1603. <br>
                        福田区 车公庙, 天安数码城 <br>
                        深圳, 广东, 中国 <br>
                        Phone: (0755) 66659000 <br>
                        Email: <a href="mailto:dong@sz-kingray.com">dong@sz-kingray.com</a>                        
                    </address>
                    <!-- END CONTACTS -->                                    
                                  
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                    <h2>Latest Tweets</h2>
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                            <span>3 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Sequat ipsum dolor onec eget orci fermentum condimentum lorem sit consectetur adipiscing
                            <span>8 min ago</span>
                        </dd>
                    </dl>                                       
                    <!-- END TWITTER BLOCK -->                                                                        
                </div>
            </div>
        </div>
    </div>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <p>
                    <span class="margin-right-10">2013 &copy; KingRay. ALL Rights Reserved.</span> 
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <ul class="social-footer">
                    <li><a href="http://weibo.com/u/1884353652"><i class="fa fa-weibo"></i></a></li>
                    <li><a href="http://github.com/jia58960"><i class="fa fa-github"></i></a></li>
                    <li><a href="http://google.com.hk"><i class="fa fa-google-plus"></i></a></li>
                    
                </ul>                
            </div>
        </div>
    </div>
</div>
        <!--/Footer Extra-->
    <script>
        var __Pub__ = '__PUBLIC__';
    </script>
         <!--load js-->
        <!--[if lt IE 9]>
            <script src="__PUBLIC__/Home/default/plugins/respond.min.js"></script>  
        <![endif]--> 
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/hover-dropdown.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/back-to-top.js"></script>

        <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/plugins/bxslider/jquery.bxslider.min.js"></script>
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/Scripts/app.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/Scripts/index.js"></script>  

        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();    
                App.initBxSlider();
                Index.initRevolutionSlider();                    
            });
        </script>

    </body>

</html>