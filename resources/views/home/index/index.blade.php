<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="shortcut icon" type="text/css" href="./favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="{{asset('../resources/assets/home') }}/css/common.css"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('../resources/assets/home') }}/css/index.css"/>
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="js/banner.js"></script>
	</head>
	<body>

		<!-- 头部开始 -->
		<div class="header">
			<!-- logo开始 -->
			<div class="logo">
				<a href="index.html"><img src="./images/logo.jpg" alt=""/></a>
			</div>
			<!-- logo结束 -->
			<!-- 导航栏开始 -->
			<div class="nav">
				<ul class="clearfix">
					<li class="active"><a href="index.html">首页</a></li>
					<li><a href="about.html">关于我们</a></li>
					<li><a href="news.html">新闻中心</a></li>
					<li><a href="product.html">产品中心</a></li>
					<li><a href="contact.html">联系我们</a></li>
				</ul>
			</div>
			<!-- 导航栏结束 -->
		</div>
		<!-- 头部结束 -->
		<!--轮播图开始-->
		<div id="banner">
			<div class="ban_content">
				<ul>
					<li><img src="images/banner01.jpg" /></li>
					<li><img src="images/banner02.jpg" /></li>
					<li><img src="images/banner03.jpg" /></li>
				</ul>
			</div>
			<div class="dots"></div>
			<div class="btns">
				<span class="btn prev"><img src="images/banner_left.png"/></span>
				<span class="btn next"><img src="images/banner_right.png"/></span>
			</div>
			
		</div>
		<!-- 轮播图结束 -->
		<!-- 内容开始 -->
		<div class="main">
			<!-- 关于我们开始 -->
			<div class="about">
				<div class="container clearfix">
					<!-- 标题 -->
					<div class="title">
						<h1>关于我们</h1>
						<span><big>a</big>bout us</span>
						<hr />
					</div>
					<!-- 文本 -->
					<div class="text">
						<h2>乐农生物科技有限公司</h2>
						<p>乐农生物科技有限公司是一家致力于生产生物农药的高新科技公司。公司以其雄厚的实力，先进的技术，全面快捷、细致周到的服务稳扎于生物农药行业之林，坚持技术与服务的创新思路，努力增强企业的核心竞争力，精心打造“乐农生物科技”的公司品牌。公司将遵循“科学管理、勇于创新、回归自然、生态平衡、绿色发展”的经营理念，以人才和技术为基础，长期致力于生物农药的创新与工业化研究，创造最高品质的产品和服务。</p>
						<!-- 查看更多 -->
						<a class="more" href="about.html">查看更多</a>
					</div>
					<!-- 图片 -->
					<div class="img">
						<a href="about.html"><img src="./images/about_01.jpg" /></a>
					</div>
				</div>
			</div>
			<!-- 关于我们结束 -->
			<!-- 产品中心开始 -->
			<div class="product">
				<div class="container">
					<!-- 标题 -->
					<div class="title">
						<h1>产品中心</h1>
						<span><big>p</big>roduct</span>
						<hr />
					</div>
					<!-- 产品列表 -->
					<div class="pro_list">
						<ul class="clearfix">
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_01.jpg"/></a>
								<p><a href="pro_details.html">BT 生物农药</a></p>
							</li>
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_02.jpg"/></a>
								<p><a href="pro_details.html">苏芸金杆菌杀虫剂</a></p>
							</li>
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_03.jpg"/></a>
								<p><a href="pro_details.html">苏芸金杆菌杀虫剂</a></p>
							</li>
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_01.jpg"/></a>
								<p><a href="pro_details.html">BT 生物农药</a></p>
							</li>
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_02.jpg"/></a>
								<p><a href="pro_details.html">苏芸金杆菌杀虫剂</a></p>
							</li>
							<li>
								<a href="pro_details.html"><img src="./images/pro_list_03.jpg"/></a>
								<p><a href="pro_details.html">苏芸金杆菌杀虫剂</a></p>
							</li>
						</ul>
						<!-- 查看更多 -->
						<a class="more" href="product.html">查看更多</a>
					</div>
				</div>
			</div>
			<!-- 产品中心结束 -->
			<!-- 新闻中心开始 -->
			<div class="news">
				<div class="container clearfix">
					<!-- 标题 -->
					<div class="title">
						<h1>新闻中心</h1>
						<span><big>n</big>ews center</span>
						<hr />
					</div>
					<!-- 左边内容 -->
					<div class="left">
						<div class="img">
							<a href="news_details.html"><img src="./images/news_left.jpg"/></a>
						</div>
						<div class="text">
							<h2><a href="news_details.html">怎样使用生物农药?</a></h2>
							<span class="time">2017-8-24</span>
							<p>生物农药-BT是一种广谱、高效、安全的杀虫剂。它不仅能够有效地防治多种虫害，且不伤害人、畜、家禽和害虫天敌。但倘若施用不当，也会降低药效甚至无效。为了提高BT农药的防治效果， 在技术上应掌握以下两点......</p>
							<!-- 更多详情 -->
							<a class="more_details" href="news.html">更多详情</a>
						</div>
					</div>
					<!-- 右边内容 -->
					<div class="right">
						<ul class="clearfix">
							<li>
								<div class="img">
									<a href="news_details.html"><img src="./images/news_right_01.jpg"/></a>
								</div>
								<div class="text">
									<h2><a href="news_details.html">农业的未来在哪里？</a></h2>
									<span class="time">2017-8-24</span>
									<p>陶氏益农与大疆创新今日签署谅解备忘录，宣布双方建立长期全面的战略合作伙伴关系，共同推动农业植保飞方技术的研发和应用，助力中国农业机械化、精准化的发展......</p>
									<!-- 更多详情 -->
									<a class="more_details" href="news.html">更多详情</a>
								</div>
							</li>
							<li>
								<div class="img">
									<a href="news_details.html"><img src="./images/news_right_02.jpg"/></a>
								</div>
								<div class="text">
									<h2><a href="news_details.html">近期重大病虫发生与防控情况</a></h2>
									<span class="time">2017-8-24</span>
									<p>目前，水稻“两迁”害虫，稻瘟病等秋粮作物重大病虫害累计发生6.35亿亩次，防治8.30亿亩次，华南、江南大部晚稻稻飞虱虫量继续上升，渤海湾地区高空继续监测到粘虫回迁峰......</p>
									<!-- 更多详情 -->
									<a class="more_details" href="news.html">更多详情</a>
								</div>
							</li>
							<li>
								<div class="img">
									<a href="news_details.html"><img src="./images/news_right_01.jpg"/></a>
								</div>
								<div class="text">
									<h2><a href="news_details.html">农业的未来在哪里？</a></h2>
									<span class="time">2017-8-24</span>
									<p>陶氏益农与大疆创新今日签署谅解备忘录，宣布双方建立长期全面的战略合作伙伴关系，共同推动农业植保飞方技术的研发和应用，助力中国农业机械化、精准化的发展......</p>
									<!-- 更多详情 -->
									<a class="more_details" href="news.html">更多详情</a>
								</div>
							</li>
							<li>
								<div class="img">
									<a href="news_details.html"><img src="./images/news_right_02.jpg"/></a>
								</div>
								<div class="text">
									<h2><a href="news_details.html">近期重大病虫发生与防控情况</a></h2>
									<span class="time">2017-8-24</span>
									<p>目前，水稻“两迁”害虫，稻瘟病等秋粮作物重大病虫害累计发生6.35亿亩次，防治8.30亿亩次，华南、江南大部晚稻稻飞虱虫量继续上升，渤海湾地区高空继续监测到粘虫回迁峰......</p>
									<!-- 更多详情 -->
									<a class="more_details" href="news.html">更多详情</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- 新闻中心结束 -->
			<!-- 联系我们开始 -->
			<div class="contact">
				<div class="container clearfix">
					<!-- 标题 -->
					<div class="title">
						<h1>联系我们</h1>
						<span><big>c</big>ontact us</span>
						<hr />
					</div>
					<!-- 联系方式 -->
					<div class="address">
						<h2>联系方式</h2>
						<p>公司名称：常州乐农生物科技有限公司</p>
						<p>公司地址：常州市武进高新区常武南路588号天安数码城C幢509-1室</p>
						<p>邮政编码：213000</p>
						<p>公司电话：0519-81000692</p>
						<p>联 系 人 ：左先生 （先生）</p>
						<p>手机号码：13401666626</p>
					</div>
					<!-- 二维码 -->
					<div class="code">
						<img src="./images/contact_code.jpg" />
					</div>
				</div>
			</div>
			<!-- 联系我们结束 -->
		</div>
		<!-- 内容结束 -->
		<!-- 尾部开始 -->
		<div class="footer">
			<p>Copyright©2008-2017 常州乐农生物科技有限公司版权所有</p>
		</div>
		<!-- 尾部结束 -->
	</body>
</html>