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



<!-- BEGIN PAGE CONTAINER -->  
<div class="page-container">

    <!-- BEGIN BREADCRUMBS -->   
    <div class="row breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="col-md-4 col-sm-4">
                <h1> </h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="pull-right breadcrumb">
                <li><a href="__URL__/index" title="">首页</a></li>
                <?php if(is_array($navarr)): $i = 0; $__LIST__ = $navarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voname): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo ($voname["url"]); ?>" title="">
                        <?php echo ($voname["name"]); ?>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN BLOG -->
        <div class="row">
            <!-- BEGIN LEFT SIDEBAR -->            
            <div class="col-md-9 col-sm-9 blog-posts margin-bottom-40">
                 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$artList): $mod = ($i % 2 );++$i;?><div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN CAROUSEL -->            
                        <div class="front-carousel">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <img src="__PUBLIC__/Home/default/Images/works/img1.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <!-- Carousel nav 
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>-->
                            </div>                
                        </div>
                        <!-- END CAROUSEL -->             
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h2><a href="__URL__/article/detail/<?php echo ($artList["id"]); ?>"><?php echo ($artList["title"]); ?></a></h2>
                        <ul class="blog-info">
                            <li><i class="fa fa-user"></i> by admin</li>
                            <li><i class="fa fa-calendar"></i> <?php echo (date('Y-m-d',$artList["time"])); ?></li>
                        </ul>
                        <p><?php echo (msubstr(strip_tags($artList["content"]),0,95)); ?></p>
                        <a class="more" href="__URL__/article/detail/<?php echo ($artList["id"]); ?>">Read more <i class="icon-angle-right"></i></a>
                    </div>
                </div>
                <hr class="blog-post-sep"><?php endforeach; endif; else: echo "" ;endif; ?>

                
                <div class="page-pagination clear">
                   <?php echo ($page); ?>
                </div>               
            </div>
            <!-- END LEFT SIDEBAR -->
            


            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-3 col-sm-3 blog-sidebar">
                <!-- CATEGORIES START -->
                <h2 class="no-top-space"><?php echo ($Lone["name"]); ?></h2>
                <ul class="nav sidebar-categories margin-bottom-40">
                    <?php if(is_array($subList)): $i = 0; $__LIST__ = $subList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosub): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo ($vosub["url"]); ?>" id="<?php echo ($vosub["id"]); ?>">
                                <?php echo ($vosub["nav_name"]); ?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <input type="hidden" value="<?php echo ($currentId); ?>" id="CurrentId"/>
                <script type="text/javascript">
                    $(function (){
                        var cureentID = $("#CurrentId").val();
                            $(".sidebar-categories li a").each(function() {
                                if($(this).attr('id')==cureentID){
                                    $(this).parent().addClass('active');
                                }
                        });
                    });
                </script>
                <!-- CATEGORIES END -->

                <!-- CATEGORIES START -->
                <h2>相关链接</h2>
                <ul class="nav sidebar-categories margin-bottom-40">
                   <li>
                        <a target="_blank" href="http://szkingray.f3322.org:8686/krcms/bbs">公司论坛</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://mail.sz-kingray.com" title="">公司邮箱</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://szkingray.f3322.org:9999">OA</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://szkingray.f3322.org:8686/krcms">CMS</a>
                    </li>
                </ul>
                <!-- CATEGORIES END -->                          
                
                <!-- BEGIN RECENT NEWS -->                            
                <!-- <h2>热点新闻</h2>
                <div class="recent-news margin-bottom-10">
                    <?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotnews): $mod = ($i % 2 );++$i;?><div class="row margin-bottom-10">
                            <div class="col-md-3">
                                <img src="__PUBLIC__/Home/default/Images/people/img2-large.jpg" alt="" class="img-responsive">                        
                            </div>
                            <div class="col-md-9 recent-news-inner">
                                <h3><a href="__URL__/article/detail/<?php echo ($hotnews["id"]); ?>"><?php echo ($hotnews["title"]); ?></a></h3>
                                <p><?php echo (msubstr(strip_tags($hotnews["content"]),0,20)); ?></p>
                            </div>                        
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div> -->
                <!-- END RECENT NEWS -->  

            </div>
            <!-- END RIGHT SIDEBAR -->            
        </div>
        <!-- END BEGIN BLOG -->
    </div>
    <!-- END CONTAINER -->
    
</div>
<!-- END BEGIN PAGE CONTAINER -->  

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