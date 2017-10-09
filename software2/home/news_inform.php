<?php
        include "../public/conn.php";
        $a_id = $_GET['id'];
        $sql = mysqli_query($conn, "select a_title, a_time from article where a_id = $a_id;");
        $res = mysqli_fetch_array($sql);
        $content = $res["a_title"].".txt";
//        echo "var detailUrl = \"../public/article/$content\";";

?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻详情</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
		  <img class=" logo" src="img/logo.png">
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li>
								<a href="index.php">首页</a>
							</li>
							<li>
								<a href="solutions.html">中心概况</a>
							</li>
							<li class="hw-menu-active">
								<a href="news.html">新闻公告 </a>
							</li>
							<li>
								<a href="customer-case.html">人才队伍</a>
							</li>
							<li>
								<a href="service-center.html">认证培训 </a>
							</li>
							<li>
								<a href="product-show.html">研究实体 </a>
							</li>
							<li>
								<a href="about-us.html">关于我们</a>
							</li>
      <!--<li><a href="recruit.html">招贤纳士 </a></li>-->
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-newspaper-o toppic-title-i"></i>
			<span class="toppic-title-span">新闻详情</span>
			<p>News Information</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="news.html" class="w-white">新闻动态</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="news_inform.php" class="w-white">新闻详情</a></span>
		</div>
	</div>
</div>

<div class="am-container-1 margin-t30">
	<div class="words-title ">


		<!--标题-->
		<span><?php echo $res["a_title"] ?></span>
		<!--日期-->
		<div>
            <?php
            echo $res["a_time"] ?>
        </div>
	</div>
</div>
<!--
	style中的样式
	.solution-inform-content-words {
	line-height: 25px;
	color: #666;
}-->

<!--新闻详细显示板块-->
<!--<div class="solution-inform" ></div>-->
<!--新闻详细显示板块end-->
<article class="am-article">
	<div class="am-article-bd">
		<p style="margin-left: 6%; margin-right: 6%;" id="showdetail"></p>
	</div>
</article>
		


<footer class="footer ">
	
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
                <span>地址:武汉市洪山区街道口鹏程国际B座2511</span>
                <span>电话:18238765101</span>
                <span>传真:(123) 456-7890</span>
                <span>邮箱:support@vectorlab.com</span>
                <span><i class="am-icon-phone"></i><em >027-82671661</em></span>
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="solutions.html">解决方案</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="product-show.html">产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="customer-case.html">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="service-center.html">服务中心</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="about-us.html">关于我们</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="recruit.html">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>

<script type="text/javascript">
    $(document).ready(function(){
        <?php
//        $a_id = $_GET['id'];
//        $sql = mysqli_query($conn, "select a_title from article where a_id = $a_id;");
//        $res = mysqli_fetch_array($sql);
//        $content = $res["a_title"].".txt";
        echo "var detailUrl = \"../public/article/$content\";";
        ?>
        $('#showdetail').load(detailUrl);
    });
</script>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/jquery.min.js"></script>
<!--<![endif]-->
<script src="js/amazeui.min.js"></script>


</html>
