<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->beginPage()?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<title>Yiishop商城后台管理系统-初始页</title>
<meta name="keywords"
	content="php,php项目,php开源项目,php开源商城,yii,yii项目,yii开源项目,yii商城系统,yiishop" />
<meta name="description" content="yiishop专注于电子商务应用开发，为中小企业提供全面的电子商务解决方案" />
        <?php echo Html::cssFile("@web/global/plugins/font-awesome/css/font-awesome.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/simple-line-icons/simple-line-icons.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/bootstrap/css/bootstrap.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/uniform/css/uniform.default.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/morris/morris.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/fullcalendar/fullcalendar.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/jqvmap/jqvmap/jqvmap.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/datatables/datatables.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/plugins/bootstrap-select/css/bootstrap-select.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/pages/css/error.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/css/components.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/global/css/plugins.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/layouts/layout/css/layout.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/layouts/layout/css/themes/darkblue.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/layouts/layout/css/custom.min.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
        <?php echo Html::cssFile("@web/css/public.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
    
    <?php $this->beginBody() ?>   
    


<body
	class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="javascript:void(0);"> 
				<img src="layouts/layout/img/logo.png" alt="logo"
					class="logo-default" />
				</a>
				<div class="menu-toggler sidebar-toggler"></div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler"
				data-toggle="collapse" data-target=".navbar-collapse"> </a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">

					<li class="dropdown dropdown-user"><a href="javascript:void(0);"
						class="dropdown-toggle" data-toggle="dropdown"
						data-hover="dropdown" data-close-others="true"> <img alt=""
							class="img-circle" src="layouts/layout/img/user-pic.png" /> <span
							class="username username-hide-on-mobile"> <?php echo Yii::$app->user->identity->user_name;?> </span>
							<i class="fa fa-angle-down"></i>
					</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li><a href="<?php echo Url::to(['console/signin']);?>"> <i class="icon-key"></i> 登录
							</a></li>
							<li><a href="<?php echo Url::to(['console/signup']);?>"> <i class="icon-key"></i> 退出
							</a></li>
							
						</ul></li>
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END HEADER INNER -->
	</div>
	<div class="clearfix"></div>
	<div class="page-container">
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<ul style="padding-top: 20px" data-slide-speed="200"
					data-auto-scroll="true" data-keep-expanded="false"
					class="page-sidebar-menu  page-header-fixed">
					<li class="sidebar-toggler-wrapper hide">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler"></div> <!-- END SIDEBAR TOGGLER BUTTON -->
					</li>
					<li class="nav-item start active open"><a
						class="nav-link nav-toggle" href="javascript:;"> <i
							class="icon-home"></i> <span class="title">站点</span> <span
							class="selected"></span> <span class="arrow open"></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start active open"><a class="nav-link "
								href="?r=admin/default/index"> <i class="icon-bar-chart"></i> <span
									class="title">业务概览</span> <span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="heading">
						<h3 class="uppercase">订单</h3>
					</li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-basket"></i> <span
							class="title">订单管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=order/default/index"> <span class="title">订单列表</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-earphones"></i> <span
							class="title">售后单管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=order/applyreship/index"> <span class="title">退货申请单</span>
									<span class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=order/applyrefund/index"> <span class="title">退款申请单</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="heading">
						<h3 class="uppercase">商品</h3>
					</li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-puzzle"></i> <span
							class="title">商品管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/default/index"> <span class="title">商品列表</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-support"></i> <span
							class="title">商品配置</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/cate/index"> <span class="title">商品分类</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/brand/index"> <span class="title">商品品牌</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/type/index"> <span class="title">商品类型</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/spec/index"> <span class="title">商品规格</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=goods/props/index"> <span class="title">商品扩展属性</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="heading">
						<h3 class="uppercase">会员</h3>
					</li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-user-following"></i> <span
							class="title">会员管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=member/default/index"> <span class="title">会员列表</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-pencil"></i> <span
							class="title">签到管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=member/sign/index"> <span class="title">签到列表</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="heading">
						<h3 class="uppercase">营销</h3>
					</li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-diamond"></i> <span
							class="title">广告管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/adposition/index"> <span class="title">广告位列表</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-speedometer"></i> <span
							class="title">商品促销管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/goodsposition/index"> <span class="title">商品推荐位列表</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-speedometer"></i> <span
							class="title">促销优惠券管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/rule/index"> <span class="title">优惠规则列表</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/activity/index"> <span class="title">促销活动列表</span>
									<span class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/coupon/index"> <span class="title">优惠券列表</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-speedometer"></i> <span
							class="title">限时特惠管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/limit/index"> <span class="title">限时秒杀</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-speedometer"></i> <span
							class="title">积分商城管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=sales/point/index"> <span class="title">积分商城列表</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="heading">
						<h3 class="uppercase">系统</h3>
					</li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-screen-desktop"></i> <span
							class="title">商店设置</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=desktop/point/index"> <span class="title">会员积分设置</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-settings"></i> <span
							class="title">管理员和权限</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=admin/role/index"> <span class="title">角色管理</span> <span
									class="selected"></span>
							</a></li>
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=admin/admin/index"> <span class="title">操作员管理</span> <span
									class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class="icon-globe"></i> <span
							class="title">配送支付管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start"><a class="nav-link "
								href="?r=desktop/reshipreason/index"> <span class="title">退货理由</span>
									<span class="selected"></span>
							</a></li>
							<li class="nav-item start"><a class="nav-link "
								href="?r=desktop/refundreason/index"> <span class="title">退款理由</span>
									<span class="selected"></span>
							</a></li>
							<li class="nav-item start"><a class="nav-link "
								href="?r=desktop/region/index"> <span class="title">地区管理</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
					<li class="nav-item "><a class="nav-link nav-toggle"
						href="javascript:;"> <i class=" icon-social-tumblr"></i> <span
							class="title">其他管理</span> <span class="selected"></span> <span
							class="arrow "></span>
					</a>
						<ul class="sub-menu">
							<li class="nav-item start
                            "><a class="nav-link "
								href="?r=desktop/catalog/index"> <span class="title">目录/文件管理</span>
									<span class="selected"></span>
							</a></li>
						</ul></li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<div class="page-content-wrapper">
			<!-- BEGIN CONTENT BODY -->
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE BAR -->
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li><a href="/backend/index.php">初始页</a><i class="fa fa-circle"></i></li>
						<li><a href="index">站点</a><i class="fa fa-circle"></i></li>
						<li class="active">业务概览</li>
					</ul>
				</div>
				<!-- END PAGE BAR -->
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE TITLE-->
				<h3 class="page-title">
					初始页 <small>总控 & 统计</small>
				</h3>
				<!-- END PAGE TITLE-->

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue">
							<div class="visual">
								<i class="fa fa-comments"></i>
							</div>
							<div class="details">
								<div class="number">
									<span data-counter="counterup" data-value="0"></span>
								</div>
								<div class="desc">今日订单数</div>
							</div>
							<a class="more" href="?r=order/default/index">查看更多 <i
								class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat red">
							<div class="visual">
								<i class="fa fa-bar-chart-o"></i>
							</div>
							<div class="details">
								<div class="number">
									￥ <span data-counter="counterup" data-value="0.00"></span>
								</div>
								<div class="desc">今日已付金额</div>
							</div>
							<a class="more" href="?r=order/default/index">查看更多 <i
								class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat green">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
									<span data-counter="counterup" data-value="1"></span>
								</div>
								<div class="desc">会员增加数</div>
							</div>
							<a class="more" href="?r=member/default/index"> 查看更多 <i
								class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple">
							<div class="visual">
								<i class="fa fa-globe"></i>
							</div>
							<div class="details">
								<div class="number">
									<span data-counter="counterup" data-value="95"></span>
								</div>
								<div class="desc">会员总数</div>
							</div>
							<a class="more" href="?r=member/default/index"> 查看更多 <i
								class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<!-- Begin: life time stats -->
						<div class="portlet light bordered">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-share font-blue"></i> <span
										class="caption-subject font-blue bold uppercase">概述</span> <span
										class="caption-helper"></span>
								</div>
								<div class="actions">
									<div class="btn-group">
										<a class="btn green btn-circle btn-sm" href="javascript:void(0);"
											data-toggle="dropdown" data-hover="dropdown"
											data-close-others="true"> 快速查看 <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li><a href="?r=order/default/index&view=9"> 全部订单 </a></li>
											<li><a href="?r=goods/default/index"> 全部商品 </a></li>
											<li><a href="?r=member/default/index"> 全部会员 </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable-line">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#overview_1" data-toggle="tab">
												热销商品 </a></li>
										<li><a href="#overview_2" data-toggle="tab"> 浏览量 </a></li>
										<li><a href="#overview_3" data-toggle="tab"> 新会员 </a></li>
										<li><a href="#overview_4" data-toggle="tab">最新订单 </a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="overview_1">
											<div class="table-responsive">
												<table
													class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>商品名称</th>
															<th>价格</th>
															<th>销量</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="overview_2">
											<div class="table-responsive">
												<table
													class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>商品名称</th>
															<th>价格</th>
															<th>浏览量</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-2-73.html"
																target="_blank"> 北京稻香村糕点礼盒 北京特产 饼干蛋糕 休闲零食 (十八种口味) </a></td>
															<td>￥148.00</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-2-73.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-1-69.html"
																target="_blank"> 重庆武隆特产羊角豆干 香菇豆干散装称重 休闲零食 烧烤味500g </a></td>
															<td>￥0.01</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-1-69.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-3-77.html"
																target="_blank"> 陕西洛川红富士优质苹果 果径75mm 12枚 2.25kg </a></td>
															<td>￥35.00</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-3-77.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-5-79.html"
																target="_blank"> 新鲜糖水黄桃罐头 425克×6罐 鲜嫩多汁 清凉可口 出口韩文水果对开罐头
																	休闲零食 </a></td>
															<td>￥35.00</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-5-79.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-4-78.html"
																target="_blank"> 洋河【两件5折】蓝色经典 绵柔型白酒 整箱 42度邃之蓝500ml*6/箱
																	白酒 </a></td>
															<td>￥1,008.00</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-4-78.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
														<tr>
															<td><a href="http://www.yiishop.com.cn/product-7-81.html"
																target="_blank"> 金堂馆 休闲零食小吃麻花2斤装 约280小袋混合装 陈吉旺福 </a></td>
															<td>￥20.00</td>
															<td>0</td>
															<td><a href="http://www.yiishop.com.cn/product-7-81.html"
																target="_blank" class="btn btn-sm btn-default"> <i
																	class="fa fa-search"></i> 浏览
															</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="overview_3">
											<div class="table-responsive">
												<table
													class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>会员名称</th>
															<th>支付单数</th>
															<th>注册时间</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="javascript:;"> feng </a></td>
															<td>0</td>
															<td>2016-11-07 11:54:43</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> tonmil </a></td>
															<td>1</td>
															<td>2016-11-05 14:22:46</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> qweqwe </a></td>
															<td>0</td>
															<td>2016-11-05 09:29:22</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> johnwong </a></td>
															<td>0</td>
															<td>2016-11-03 11:30:48</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> test222 </a></td>
															<td>0</td>
															<td>2016-11-03 03:37:01</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> hdk </a></td>
															<td>0</td>
															<td>2016-10-31 16:39:22</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="overview_4">
											<div class="table-responsive">
												<table
													class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>订单号</th>
															<th>创建时间</th>
															<th>金额</th>
															<th>状态</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="javascript:;"> 2016110557989798 </a></td>
															<td>2016-11-05 14:24:49</td>
															<td>￥0.020</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> 2016110599989810 </a></td>
															<td>2016-11-05 09:29:50</td>
															<td>￥148.010</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> 2016102949554998 </a></td>
															<td>2016-10-29 03:10:50</td>
															<td>￥148.000</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> 2016102148101541 </a></td>
															<td>2016-10-21 08:41:45</td>
															<td>￥1043.000</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> 2016101898100984 </a></td>
															<td>2016-10-18 10:40:05</td>
															<td>￥148.000</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
														<tr>
															<td><a href="javascript:;"> 2016101757545452 </a></td>
															<td>2016-10-17 15:14:13</td>
															<td>￥0.010</td>
															<td><span class="label label-sm label-warning"> 活动 </span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End: life time stats -->
					</div>
					<!--
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-globe font-red"></i>
                    <span class="caption-subject font-red bold uppercase">收入</span>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> 订单金额 </a>
                    </li>
                    <li>
                        <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab"> 订单数量 </a>
                    </li>
                </ul>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="portlet_ecommerce_tab_1">
                        <div id="statistics_1" class="chart"> </div>
                    </div>
                    <div class="tab-pane" id="portlet_ecommerce_tab_2">
                        <div id="statistics_2" class="chart"> </div>
                    </div>
                </div>
                <div class="well margin-top-20">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-success"> 订单总金额: </span>
                            <h3>$1,234,112.20</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-info"> 支付总金额: </span>
                            <h3>$134,90.10</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-danger"> 发货总金额: </span>
                            <h3>$1,134,90.10</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-warning"> 发货总数量: </span>
                            <h3>235090</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
				</div>
				<input type="hidden" class="request-csrf" name="_csrf"
					value="YmZBaDBlMVU4IXRFAywFZy4JMD5YUQk6CzwuUXgfSRAaNTQxUiJHEg==" />
			</div>
		</div>
	</div>
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			2016 &copy; by . <a href="" title="yiishop2" target="_blank">YiiShop2</a>
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
        
        <?php echo Html::jsFile("@web/global/plugins/jquery.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootstrap/js/bootstrap.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/js.cookie.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/jquery.blockui.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/uniform/jquery.uniform.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/jquery-validation/js/jquery.validate.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootbox/bootbox.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootstrap-select/js/bootstrap-select.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/scripts/app.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/layouts/layout/scripts/layout.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/layouts/layout/scripts/demo.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/layouts/global/scripts/quick-sidebar.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/layouts/global/scripts/quick-sidebar.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/backend/global/table-databases-managed.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/backend/global/form-validate.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/backend/global/form-select.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/backend/global/public.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/moment.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/counterup/jquery.waypoints.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/counterup/jquery.counterup.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/flot/jquery.flot.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/global/plugins/flot/jquery.flot.categories.min.js", ['type' => 'text/javascript']); ?>
        <?php echo Html::jsFile("@web/backend/admin/default.js", ['type' => 'text/javascript']); ?>
        
        

	<?php $this->endBody()?>
    </body>
<script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?098d458bde2c1fa90f92a3b2fd046e74";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</html>
<?php $this->endPage()?>
