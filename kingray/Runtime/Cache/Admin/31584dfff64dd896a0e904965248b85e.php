<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>文章详情</title>
        
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/reset.css" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/Css/style.css" />
  
		<!-- jQuery -->
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/Admin/Scripts/simpla.jquery.configuration.js"></script>
		<!-- jQuery Configuration -->
        
	</head>
       <body style="background:none;margin:10px 10px;">
    <div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>文章编辑</h3>
				
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
		<div class="tab-content default-tab" id="tab2">
					<h3><标题编辑></h3>
						
                        
			<form name="addArticle" action="__URL__/editArticle" method="post" style="margin-left:22px;border-bottom:1px solid #eee">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>1、选择所属导航</label>
										<select name="nav_id" id="nav_id">
                                       <?php if(is_array($menu["nav"])): $i = 0; $__LIST__ = $menu["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navOne): $mod = ($i % 2 );++$i;?><option value="<?php echo ($navOne["id"]); ?>" selected><?php echo ($navOne["nav_name"]); ?>(一级)</option>
                                            <?php if(is_array($navOne["sub"])): $i = 0; $__LIST__ = $navOne["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>">——<?php echo ($vo["nav_name"]); ?>(二级)</option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
								</select> 
								</p>
								
								<p>
									<label>2、文章标题</label>
									<input class="text-input small-input" name="title" value="<?php echo ($artdetail["0"]["title"]); ?>" />
								</p>
											
                                <p>
                                	
                                	<label id="isHome">4、是否显示在网站首页</label>	
									<input type="radio" name="home_page" class="isHome" value="0" />不显示<br />
                                    <input type="radio" name="home_page" class="isHome" value="1" />显示在”关于金瑞亿“（有且仅有一篇文章）<br />
                                    <input type="radio" name="home_page" class="isHome" value="2" />显示在”我们能做什么“（只能显示三篇文章）<br />
                                    <input type="radio" name="home_page" class="isHome" value="3" />显示在”合作伙伴“（有且仅有一篇文章）
                                    <br />
                                     <small>如添加多篇文章到主页，则根据时间降序排列</small>
                                </p>
                                <p>
                                
                                	<label id="isHot">5、是否本菜单下的热门文章(热门文章将显示在列表右侧)</label>	
									<input type="radio" name="hot_news" class="ishot"  value="0" />不是
                                    <input type="radio" name="hot_news" class="ishot"  value="1" />是
                                    <br />
                                    <small>一个菜单下最多显示三篇热门文章，超过三篇按最新添加时间排序</small>
                                </p>
                                <p><input type="hidden" name="id" value="<?php echo ($artdetail["0"]["id"]); ?>" /></p>
								<p>
									<input class="button" type="submit" value="提 交" />
								</p>
								
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
							
						</form>
                        
                        <h3 style="margin-top:10px"><段落编辑></h3>
                        <form action="__URL__/addpara" method="post" enctype="multipart/form-data" name="paragraph" style="margin-left:22px;">
                        <p>
                        	<label>1、选择段落</label>
							<select name="para_id" id="title_id">
                            	<option value="0" selected="selected">新增段落</option>
                                </select>
                              <p style="display:none" id="nopara">该文章暂无段落！请在下面添加</p>
                              <p style="display:none" id="noparadata">请在下面添加新段落</p>
						</p>	
                        <p class="paraDetail">
                            <label>2、段落小标题</label>									
                            <input class="text-input" type="text" id="title" name="title" />
						</p>	
                        <p class="paraDetail">
                            <label>3、段落图片</label>		
                            <input type="radio" name="size" value="630*130" />630*130(中)
                            <input type="radio" name="size" value="630*350" />630*350(大)
                            <input type="radio" name="size" value="300*150" />300*150(小)
                            <input class="text-input textarea" id="editor_id" name="img" type="file" />
                            <img src="" id="paraImg"/>
						</p>	
                        
                        <p class="paraDetail">
                            <label>4、段落内容</label>									
                            <textarea class="text-input textarea" id="editor_id" name="content" rows="5"></textarea>
                             
						</p>	
                        <p>
                        <input type="hidden" id="articleID" name="aid" value="<?php echo ($artdetail["0"]["id"]); ?>" />
                        	<input class="button" type="submit" value="提 交" /> 
                        </p>
                        </form>
						<input type="hidden" id="hotNews" name="hot" value="<?php echo ($artdetail["0"]["hot_news"]); ?>" />
                        <input type="hidden" id="homePage" name="home" value="<?php echo ($artdetail["0"]["home_page"]); ?>" />
                        <input type="hidden" id="navID" name="navID" value="<?php echo ($artdetail["0"]["nav_id"]); ?>" />
                       
					</div>
						</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
             <script type="text/javascript">

			 function getSelectVal(){
				$.getJSON("__URL__/getTitleJson",{navId:$("#articleID").val()},function(json){ 
					if(json.status==1){
					var data=$.parseJSON(json.data);
					var titileId = $("#title_id"); 
					//$("option[val!=0]",titileId).remove(); //清空原有的选项
					var i=1;
					$.each(data,function(key,array){ 
							var option="<option value='"+array['id']+"'>段落"+i+"</option>"; 
							titileId.append(option); 
							i++;
						});
					}else if(json.status == 0){
						$("#title_id").show();
						//$("#nopara").show();
						$('#noparadata').show();
						}
				}); 
			} 
		
		function getParaDetail(){
			$.post("__URL__/getParaDetail", { paraID: $("#title_id").val()},
			   function(json){
				  if (json.status==1){
                data =json.data;
				var paraP=$(".paraDetail");
				paraP.show();
				$(".paraDetail #title").val(data[0].title);
				$('.paraDetail #editor_id').html(data[0].content);
				if(data[0].img!=''){
					$(".paraDetail #paraImg").attr('src','__PUBLIC__/Uploads/img/'+data[0].img);
				}
            }else{
                $('#noparadata').show();
				$(".paraDetail input").val('');
				$(".paraDetail textarea").val('');
            }
			   },"json");
			}
		
		$(function(){
			getSelectVal(); 
				$("#title_id").change(function(){ 
					getParaDetail(); 
				}); 
				
			var is_home = $("#homePage").val();
			$(".isHome").each(function(index, element) {
				if(is_home == $(this).val()){
					$(this).attr("checked","checked");
					}						
            });
			
			var is_hot = $("#hotNews").val();
			$(".ishot").each(function(index, element) {
				if(is_hot == $(this).val()){
					$(this).attr("checked","checked");
					}						
            });
			
			
			var is_nav = $("#navID").val();
			$("#nav_id option").each(function(index, element) {
				if(is_nav == $(this).val()){
					$(this).attr("selected","selected");
					}						
            });
			
		});
		
        </script>
    </body>
    </html>