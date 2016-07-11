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
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	</head>
	<body>
		<!--头部包含-->
		<!-- 
author : sudonglin
version : 1.0
date : 2016.7.9
descriptioin : 个人页面的头部
-->

<!-- 顶部 start -->
	<div id="banner">
		<div class="container">
			<div class="banner-user">
				<span><a href="/eMarket/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/eMarket/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/eMarket/index.php/Home/Index/index">商城首页</a></li>
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
					<li><a href="">客服中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部 end -->
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/eMarket/Public/image/logoletter.jpg"/></div>
			<div class="letter">
				<ul>
					<li><a  href="/eMarket/index.php/Home/Person/cart.html">购物车</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/collect.html">收藏夹</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/bought.html">已买宝贝</a></li>		
					<li><a  href="/eMarket/index.php/Home/Person/setting.html">个人设置</a></li>
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
						<li><a href="/eMarket/index.php/Home/Person/collect">收藏的商品</a></li>
						<li><a href="/eMarket/index.php/Home/Person/collect2">收藏的店铺</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="collect_things">
				 	<!-- 列表布局 -->
				 	<div class="liebiao">
				 		<ul>
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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

				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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
				 			<li>
				 				<div class="c_goods">
				 					<div class="p_img">
				 						<a href=""><img src="/eMarket/Public/image/goods/collect.jpg"/></a>
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


				 		</ul>
				 	 </div>
				 </div>
			</div>
		</div>
	</div>
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