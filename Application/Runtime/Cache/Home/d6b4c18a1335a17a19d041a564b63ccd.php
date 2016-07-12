<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.10
description : 个人中的收藏商品页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
	</head>
	<body>
		<!--头部包含-->
		<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有头部
-->
<!-- 顶部 start -->
	<div id="banner">
		<div class="container">
			<div class="banner-user">
<<<<<<< HEAD
				<span><a href="/e-market/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/e-market/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/e-market/index.php/Home/Index/index">商城首页</a></li>
=======
<<<<<<< Updated upstream
				<span><a href="<?php echo ($nav["url"]["0"]); ?>"><?php echo ($nav["state"]["0"]); ?></a></span>
				<span><a href="<?php echo ($nav["url"]["1"]); ?>"><?php echo ($nav["state"]["1"]); ?></a></span>
=======
				<span><a href="/eMarket/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/eMarket/index.php/Home/Login/register">注册</a></span>
>>>>>>> Stashed changes
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/eMarket/index.php/Home/Index/index">商城首页</a></li>
<<<<<<< Updated upstream
					<li><a href="/eMarket/index.php/Home/Person/cart">购物车</a></li>
					<li><a href="/eMarket/index.php/Home/Person/collect">收藏夹</a></li>
=======
>>>>>>> 726d56db9a388061684bc8de5f46c2dc8eed59b4
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
>>>>>>> Stashed changes
					<li><a href="">客服中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 底部 end -->
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/e-market/Public/image/logoletter.jpg"/></div>
			<div class="letter"> 
				<ul>
					<li><a  href="/e-market/index.php/Home/Person/cart.html" id="cart">购物车</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/collect.html" id="collect">收藏夹</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/bought.html" id="bought">已买宝贝</a></li>		
					<li><a  href="/e-market/index.php/Home/Person/setting.html" id="set">个人设置</a></li>
				</ul>				
			</div>
			<div class="search">
			     
				<input type="text" name="" placeholder="柠檬"/>
				<button type="submit" class="">搜索</button>
			</div>
		</div>
		<!--头部结束-->
		<!-- 总体布局 -->
		<div class="contant">
			<div class="collect_contanter">
			<!-- 侧边栏 -->
				<div class="left">
					<ul>
						<li><a href="/e-market/index.php/Home/Person/collect" id="collect_goods">收藏的商品</a></li>
						<li><a href="/e-market/index.php/Home/Person/collect2">收藏的店铺</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="collect_things">
				 	<!-- 列表布局 -->
				 	<div class="liebiao">
				 		<ul>
				 			<!-- <li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/e-market/Public/image/goods/collect.jpg"/></a>
				 					</div>
				 					<div class="p_name">
				 						<input type="checkbox" value="" name="">
				 						<a href="" title="西西卖诺 水果蛋糕 ">&nbsp;&nbsp;西西卖诺&nbsp;&nbsp;水果蛋糕 </a>
				 					</div>
									<div class="price">
										<strong price="49.90">￥142.00</strong>
									</div>
									<div class="value">
										<span><a href="">4990人评价</a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好评度95%</b></span>
									</div>
						            <div>
						            	<a class="btn" href="">加入购物车</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn" href="">取消关注</a>
						            </div>
				 				</div>
				 			</li>
 -->
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				 				<div class="c_goods">
<<<<<<< Updated upstream
				 					<div class="p1_img">
=======
				 					<div class="p_img">
<<<<<<< HEAD
				 						<a href=""><img src="/e-market/Public/image/goods/<?php echo ($vo["img"]); ?>"/></a>
=======
>>>>>>> Stashed changes
				 						<a href=""><img src="/eMarket/Public/image/goods/<?php echo ($vo["img"]); ?>"/></a>
>>>>>>> 726d56db9a388061684bc8de5f46c2dc8eed59b4
				 					</div>
				 					<div class="p_name">
				 						
				 						<a href="" title="西西卖诺 水果蛋糕 "><?php echo ($vo["name"]); ?></a>
				 					</div>
									<div class="price">
										<strong price="49.90">￥<?php echo ($vo["price"]); ?></strong>
									</div>
									<div class="value">
										<span><a href=""><?php echo ($vo["number"]); ?>人评价</a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好评度<?php echo ($vo["evaluate"]); ?>%</b></span>
									</div>
						            <div>
						            	<a class="btn" href="javascript:f1(<?php echo ($vo["gid"]); ?>);">加入购物车</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn" href="javascript:f2(<?php echo ($vo["gid"]); ?>);">取消关注</a>
						            </div>
				 				</div>
				 			</li><?php endforeach; endif; else: echo "" ;endif; ?>

				 		</ul>
				 	 </div>
				 </div>
			</div>
		</div>
	</div>
	 <script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			    $(document).ready(function(){ 
				            $("#collect").css("background-color","#E43D00");
						    $("#collect_goods").css("color","#FF4400");
　                　}); 
                
               function f1(gid){
			       //alert(gid);
				   $.post("/e-market/index.php/Home/Person/add_delete_collect",{
				       id:gid
				   },function(res){
				       alert(res);
					   window.location.href="/e-market/index.php/Home/Person/collect";
				   });
			   }
			   function f2(gid){
			      $.post("/e-market/index.php/Home/Person/collect_delete",{
				       id:gid
				   },function(res){
				       alert(res);
					   window.location.href="/e-market/index.php/Home/Person/collect";
				   });
			   }
			</script>

		<!-- 引入尾部 -->
<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有尾部
-->

<!-- 尾部 start -->
	<div id="footer">
		<div class="container">
			<div class="footer-top"></div>
			<div class="footer-bottom">
				<div class="footer-bottom-line1">
					<span><a href="">关于我们</a></span>
					<span><a href="">联系客服</a></span>
					<span><a href="">商家入驻</a></span>
					<span><a href="">沸点工作室</a></span>
				</div>
				<div class="copyright">Copyright © 2016 <a href="http://www.52feidian.com/" target="blanket">沸点工作室 </a>版权所有</div>
				<div>招商引资  合作qq：123456789</div>
			</div>
		</div>
	</div>
	<!-- 尾部 end -->
</body>
</html>