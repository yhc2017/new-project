<?php include "../public/conn.php";?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title>首页</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link rel="stylesheet" href="css/bootstrap.css" />
        <script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/lib.js"></script>
		<link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
		<link rel="stylesheet" href="css/amazeui.css" />
		<link rel="stylesheet" href="css/style.css" />

	<body>
	<!--回到顶部-->
  <div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
    <a href="#top" title="">
        <img class="am-gotop-icon-custom" src="images/topbule.png" />
    </a>
  </div>
		<!-- 顶部的log区域  -->
	<header class="container-fluid container-top">
		<div class="enter">
				<a href="../admin/login.php">后台入口 </a>
		   </div>
		<div class="logo tc"><a href="http://www.bigdata-research.org/"><img src="images/logo.png"/></a></div>
	 
	  <!-- Brand and toggle get grouped for better mobile display 小屏幕时候回变成的菜单的组件配置-->
      <span class="container navbar-header">
       <button type="button" class="navbar-toggle visible-md-block visible-sm-block visible-xs-block" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <!-- sr-only保证屏幕阅读器正确读取且不会影响 UI 的视觉呈现 -->
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>	
      </span>
	</header>
		<!-- 导航条 -->
		<header>
		<nav id="nv" class="navbar navbar-default  visible-lg" >
  <div class="container"  style="width: 1000px;">
    <!-- Collect the nav links, forms, and other content for toggling  小屏幕时候会变成菜单 -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 "  >
    	<ul>
							<li style="border-bottom: 4px solid #0086DA;">
								<a href="index.php">首页</a>
							</li>
							<li>
								<a href="general-profile.php">中心概况</a>
							</li>
							<li>
								<a href="news.php">新闻动态 </a>
							</li>
							<li>
								<a href="team.php">人才队伍</a>
							</li>
							<!--<li>
								<a href="certification-training.html">认证培训</a>
							</li>-->
							<li>
								<a href="http://home.sise.cn.html">学院官方 </a>
							</li>
							<li>
								<a href="about-us.php">关于我们</a>
							</li>
							<!--<li><a href="../admin/login.php">后台入口 </a></li>-->
						</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


<section class="nv-smenu container-fluid" >
                <div class="container" style="width: 1000px;">
                    <dl>
                        <dd><a href="../admin/index.php"><img src="images/6.jpg"style="margin-left: auto; margin-top:10px;width: 180px;height: 150px;border: 5px solid #DADADA;"></dd>
                    </dl>
                    <dl style="margin-left: 20px;">
                    	<dd><a href="#">中心介绍</a></dd>
                    	<dd><a href="#">宗旨目标</a></dd>
                    	<dd><a href="#">组织架构</a></dd>
                    	<dd><a href="#">重要成果</a></dd>
                    </dl>
					<dl style="margin-left: 75px;">
                        <dd><a href="#">媒体报道</a></dd>
                        <dd><a href="#">简报摘要</a></dd>
                        <dd><a href="#">动态通知</a></dd>
                    </dl>
                    <dl style="margin-left: 80px;">
                        <dd><a href="#">两院院士</a></dd>
                        <dd><a href="#">杰出人才</a></dd>
                        <dd><a href="#">优秀人才</a></dd>
                        <dd><a href="#">梯队人才</a></dd>
                        <dd><a href="#">招纳贤士</a></dd>
                    </dl>
					<dl style="margin-left: 90px;">
                        <dd><a href="http://www.sise.com.cn/">华软主页</a></dd>
                        <dd><a href="http://news.sise.com.cn/">华软新闻</a></dd>
                        <dd><a href="http://cp.sise.com.cn/">党建之窗</a></dd>
                        <dd><a href="http://tuanwei.sise.cn/">学院团委</a></dd>
                        <dd><a href="http://job.sise.com.cn/">就业指导</a></dd>
                        <dd><a href="http://zs.sise.com.cn/recruit/index/index">招生办</a></dd>
                        <dd><a href="http://dwc.scse.com.cn/">对外交流</a></dd>
                        <dd><a href="http://bid.sise.cn/index.asp">招标网</a></dd>
                    </dl>
				
					<dl style="margin-left: 50px;">

                        
                        <dd><a href="#">关于软件工程</a></dd>
                        <dd><a href="#">办公环境</a></dd>
                        <dd><a href="#">联系我们</a></dd>
                       
                    </dl>
					<!--<dl style="margin-left: 18px;">
                    	<dd><a href="#">安全大数据研究所</a></dd>
                        <dd><a href="#">健康大数据研究中心</a></dd>
                        <dd><a href="#">教育大数据研究所</a></dd>
                        <dd><a href="#">移动大数据研究所</a></dd>
                        <dd><a href="#">大数据挖掘与推理研究所</a></dd>
                        <dd><a href="#">遥感大数据研究所</a></dd>
                </dl>-->
				</div>
           </section>
           </nav>
  		<!-- -->
		</header>
		</section>     
		<div class="rollpic">
			<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{&quot;animation&quot;:&quot;slide&quot;,&quot;slideshow&quot;:false}'>
				<ul class="am-slides">
					<li>
						<img src="img/1.png" />
						<div class="am-slider-desc">Big World,Small Data</div>
					</li>
					<li>
						<img src="img/2.png" />
						<div class="am-slider-desc">Big World,Small Data</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="am-container-1">
			<div class="solutions part-all">
				<div class="part-title">
					<a href="general-profile.html">
						<i class="am-icon-lightbulb-o part-title-i"></i>
						<span class="part-title-span">中心概况</span>
						<p>GENERAL PROFILE</p>
					</a>
				</div>
				<ul class="am-g part-content solutions-content">
					<li class="am-u-sm-7 am-u-md-4 am-u-lg-4">
						<!--<i class="am-icon-safari solution-circle"></i>-->
						<img class="solution-circle" src="images/icon1.png" />
						<!--<span class="solutions-title">网站、移动网站</span>-->
						<p class="solutions-way">目前国内规模最大、架构最完整的大数据产学研一 体化机构,由国内大数据领域领军专家周涛教授组建并担任中心主任,致力于构建大数据行业的“贝尔实验室”</p>
					</li>
					<li class="am-u-sm-6 am-u-md-4 am-u-lg-4">
						<!--<i class="am-icon-magic solution-circle"></i>-->
						<img class="solution-circle" src="images/icon2.png" />
						<!--<span class="solutions-title">网站、移动网站</span>-->
						<p class="solutions-way">作为校级研究中心，拥有国家级人才12名，包括 2 名长江学者，8名千人计划和1名万人计划获得者，中心成员曾获得1项国家自然科学二等奖，2项国家科技进步二等奖，11项省部级科技奖励一等奖。
						</p>
					</li>
					<li class="am-u-sm-6 am-u-md-4 am-u-lg-4">
						<!--<i class="am-icon-phone solution-circle"></i>-->
						<img class="solution-circle" src="images/icon3.png" />
						<!--<span class="solutions-title">网站、移动网站</span>-->
						<p class="solutions-way">定位为连接政府、企业、高校、研究院所、资本和 创业型企业的纽带和中枢，致力建设成为在学科、学术、技术、产业、机制五方面均在国内具有引领地位的大型创新平台。</p>
					</li>
				</ul>

			</div>
		</div>
		
		<div class="news-all" style="height: 640px;">
			<div class=" am-container-1">
				<div class="news part-all">
					<div class="part-title">
						<a href="news.html">
							<i class="am-icon-newspaper-o part-title-i"></i>
							<span class="part-title-span">新闻动态</span>
							<p>News & Events</p>
						</a>
					</div>
					<div class="news-content">
					<div class="am-u-sm-10 am-u-md-10 am-u-lg-4">
					        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
					            <h2 class="am-titlebar-title ">
					                研究所要闻
					            </h2>
					            <nav class="am-titlebar-nav">
					                <a target="_blank" href="news.html">more &raquo;</a>
					            </nav>
					        </div>
					
					        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
					            <ul class="am-list"  >
					                <?php
					                $sql = mysqli_query($conn,"select * from article where a_belong = '1' group by a_id desc limit 0,5;");
					
					                while($res = mysqli_fetch_array($sql)) {
					                    $res["a_title"];
					                    $res["a_id"];
					                    $res["a_time"];
					                    ?>
					                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
					                        <div class="am-u-sm-11" style="height: 60px;"> 
					                            <h3 class="am-list-item-hd">
					                                <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
					                            </h3>
					                            <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
					                        </div>
					                    </li>
					                    <?php
					                }
					                ?>
					
					            </ul>
					        </div>
					
					       </div>
					
					
					<div class="am-u-sm-0 am-u-md-0 am-u-lg-4">
					        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
					            <h2 class="am-titlebar-title ">
					                学院新闻
					            </h2>
					            <nav class="am-titlebar-nav">
					                <a target="_blank" href="news.html">more &raquo;</a>
					            </nav>
					        </div>
					
					    <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
					        <ul class="am-list"  >
					            <?php
					            $sql = mysqli_query($conn,"select * from article where a_belong = '2' group by a_id desc limit 0,5;");
					
					            while($res = mysqli_fetch_array($sql)) {
					                $res["a_title"];
					                $res["a_id"];
					                $res["a_time"];
					                ?>
					                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
					                    <div class=" am-u-sm-11" style="height: 60px;">
					                        <h3 class="am-list-item-hd">
					                            <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
					                        </h3>
					                        <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
					                    </div>
					                </li>
					                <?php
					            }
					            ?>
					        </ul>
					    </div>
					</div>
       
					   <div class="am-u-sm-0 am-u-md-0 am-u-lg-4">
					<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
					<h2 class="am-titlebar-title ">
					系内热点
					</h2>
					<nav class="am-titlebar-nav">
					<a href="news.html">more &raquo;</a>
					</nav>
					</div>
					
					   <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
					   <ul class="am-list"  >
					   <?php
					   $sql = mysqli_query($conn,"select * from article where a_belong = '3' group by a_id desc limit 0,5;");
					
					   while($res = mysqli_fetch_array($sql)) {
					       $res["a_title"];
					       $res["a_id"];
					       $res["a_time"];
					       ?>
					       <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
					           <div class=" am-u-sm-11" style="height: 60px;">
					               <h3 class="am-list-item-hd">
					                   <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
					               </h3>
					               <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
					           </div>
					       </li>
					       <?php
					   }
					   ?>
					   </ul>
					   </div>
					
					
					</div>

			</div>
		</div>
		</div>
		</div>

		<div class="part-all gray-li"">
			<div class="customer  am-container-1">
				<div class="part-title">
					<a href="team.html">
						<i class="am-icon-users part-title-i"></i>
						<span class="part-title-span">专家介绍</span>
						<p>Expert introduction</p>
					</a>
				</div>
			</div>
			
<div id="category_top" style="background-image: url(images/zlbg.png); height: 300px;">
    <div class="kz" id="leftbtn">
        <i class="am-icon-angle-left" ></i>
    </div>
    <div class="kz" style="right:0px;" id="rightbtn">
        <i class="am-icon-angle-right"></i>
    </div>
    <div class="am-container" >
        <ul class="am-avg-sm-4 am-avg-md-6 am-avg-lg-7 am-thumbnails" id="topface">
            <li>
                <a href="#">
                <div class="ctl">
                    <img src="images/20170501044008834.bmp">
                    <h3 style="color: #0086DA;">张屹</h3>
                    <p>主任</p>
                </div></a>
            </li>
            <li>
                <a href="#">
                <div class="ctl">
                     <img src="images/20170501044022350.jpg">
                    <h3 style="color: #0086DA;">黄友谦</h3>
                    <p>教授</p>
                </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044038374.bmp">
                    <h3 style="color: #0086DA;">侯广坤</h3>
                    <p>教授</p>
                    </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044055173.jpg">
                    <h3 style="color: #0086DA;">薛建民</h3>
                    <p>教授</p>
                    </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044108309.jpg">
                    <h3 style="color: #0086DA;">谭兆信</h3>
                    <p>教授</p>
                    </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044123118.jpg">
                    <h3 style="color: #0086DA;">姚恩建</h3>
                    <p>教授</p>
                    </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044108309.jpg">
                    <h3 style="color: #0086DA;">谭兆信</h3>
                    <p>教授</p>
                    </div></a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/20170501044123118.jpg">
                    <h3 style="color: #0086DA;">姚恩建</h3>
                    <p>教授</p>
                    </div></a>
            </li>
        </ul>

    </div>

</div>

</div>	
<script>
    var countnum=8 //一共多少个图 例如6个请输入5
    $("#leftbtn").click(function(){
        var temp_href=$("#topface li:eq(0) a").attr("href");
        var temp_img=$("#topface li:eq(0) img").attr("src");
        var temp_h3=$("#topface li:eq(0) h3").html();
        var temp_p=$("#topface li:eq(0) p").html();

        for (i=0; i<countnum; i++){
            var n=i+1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").html($("#topface li:eq("+n+") h3").html());
            $("#topface li:eq("+i+") p").html($("#topface li:eq("+n+") p").html());
        };
        $("#topface li:eq("+countnum+") a").attr('href',temp_href);
        $("#topface li:eq("+countnum+") img").attr('src',temp_img);
        $("#topface li:eq("+countnum+") h3").html(temp_h3);
        $("#topface li:eq("+countnum+") p").html(temp_p);
    });
    $("#rightbtn").click(function(){
        var temp_href=$("#topface li:eq("+countnum+") a").attr("href");
        var temp_img=$("#topface li:eq("+countnum+") img").attr("src");
        var temp_h3=$("#topface li:eq("+countnum+") h3").html();
        var temp_p=$("#topface li:eq("+countnum+") p").html();

        for (i=countnum; i>0; i--){
            var n=i-1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").html($("#topface li:eq("+n+") h3").html());
            $("#topface li:eq("+i+") p").html($("#topface li:eq("+n+") p").html());
        };
        $("#topface li:eq(0) a").attr('href',temp_href);
        $("#topface li:eq(0) img").attr('src',temp_img);
        $("#topface li:eq(0) h3").html(temp_h3);
        $("#topface li:eq(0) p").html(temp_p);
    });
</script>
<script src="js/public.js"></script>


		<?php include ("footer_dome.php");?>

        <script>
            function showdetail(obj){
                var id = obj.id;
                var kk = document.getElementById(id);
                var jj = kk.innerHTML;
                alert(jj);
            }
        </script>
	</body>
	<script src="js/jquery.min.js"></script>
    <script src="js/amazeui.min.js"></script>
    <script src="js/scroll.js"></script>
    <script type="text/javascript">
    </script>

</html>