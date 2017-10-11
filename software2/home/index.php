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
		<nav id="nv" class="navbar navbar-default  visible-lg"  >
  <div class="container" >
    <!-- Collect the nav links, forms, and other content for toggling  小屏幕时候会变成菜单 -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 " >
    	<ul>
							<li style="border-bottom: 4px solid #8c0000;">
								<a href="index.php">首页</a>
							</li>
							<li>
								<a href="solutions.html">中心概况</a>
							</li>
							<li>
								<a href="product-show.html">新闻公告 </a>
							</li>
							<li>
								<a href="customer-case.html">人才队伍</a>
							</li>
							<li>
								<a href="service-center.html">认证培训 </a>
							</li>
							<li>
								<a href="news.html">研究实体 </a>
							</li>
							<li>
								<a href="about-us.html">关于我们</a>
							</li>
							<!--<li><a href="../admin/login.php">后台入口 </a></li>-->
						</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


<section class="nv-smenu container-fluid" >
                <div class="container">
                    <dl>
                        <dd><img src="images/6.jpg"style="margin-left: auto; margin-top:10px;width: 180px;height: 150px;border: 1px solid #8C0000;"></dd>
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
                        <dd><a href="#">公告通知</a></dd>
                    </dl>
					<dl style="margin-left: 80px;">
                    	<dd><a href="#">研究成果</a></dd>
                        <dd><a href="#">开放基金</a></dd>
                        <dd><a href="#">学术资源</a></dd>
                        <dd><a href="#">大数据竞赛</a></dd>
                    </dl>
					<dl style="margin-left: 80px;">
                        <dd><a href="#">两院院士</a></dd>
                        <dd><a href="#">杰出人才</a></dd>
                        <dd><a href="#">优秀人才</a></dd>
                        <dd><a href="#">梯队人才</a></dd>
                        <dd><a href="#">招纳贤士</a></dd>
                    </dl>
					<dl style="margin-left: 50px;">
                        <dd><a href="#">数据工程师认证</a></dd>
                        <dd><a href="#">资格认证查询</a></dd>
                        <dd><a href="#">EMBA培训</a></dd>
                        <dd><a href="#">EDP培训</a></dd>
                        <dd><a href="#">浩格英泰培训认证</a></dd>
                    </dl>
					<dl style="margin-left: 18px;">
                    	<dd><a href="#">安全大数据研究所</a></dd>
                        <dd><a href="#">健康大数据研究中心</a></dd>
                        <dd><a href="#">教育大数据研究所</a></dd>
                        <dd><a href="#">移动大数据研究所</a></dd>
                        <dd><a href="#">大数据挖掘与推理研究所</a></dd>
                        <dd><a href="#">遥感大数据研究所</a></dd>
                    </dl>
				</div>
           </section>
           </nav>
        </header>
		</section>     
		<div class="rollpic">
			<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}'>
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
					<a href="solutions.html">
						<i class="am-icon-lightbulb-o part-title-i"></i>
						<span class="part-title-span">中心概况</span>
						<p>ABOUT US</p>
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
		<div class="gray-li">
			<div class="customer-case part-all ">
				<div class="part-title">
					<a href="customer-case.html">
						<i class=" am-icon-briefcase part-title-i"></i>
						<span class="part-title-span">研究实体</span>
						<p>SCIENTIFIC RESEARCH</p>
					</a>
				</div>

				<ul data-am-widget="gallery" class=" am-avg-sm-1 am-avg-md-4 am-avg-lg-4 am-gallery-bordered customer-case-content">
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/health/">
								<img src="images/i1.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">健康大数据研究中心</h3>
								<a href="http://www.bigdata-research.org/research/health/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/inference/">
								<img src="images/i2.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">大数据挖掘与推理研究所</h3>
								<a href="http://www.bigdata-research.org/research/inference/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/move/">
								<img src="images/i3.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">移动大数据研究所</h3>
								<a href="http://www.bigdata-research.org/research/move/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/education/">
								<img src="images/i4.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">教育大数据研究所</h3>
								<a href="http://www.bigdata-research.org/research/education/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/sensing/">
								<img src="images/i5.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">遥感大数据研究所</h3>
								<a href="http://www.bigdata-research.org/research/sensing/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/technology/">
								<img src="images/i6.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">大数据产业技术研究院</h3>
								<a href="http://www.bigdata-research.org/research/technology/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/innovate/">
								<img src="images/i7.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">大数据协同创新平台</h3>
								<a href="http://www.bigdata-research.org/research/innovate/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>
					<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
						<div class="am-gallery-item case-img1">
							<a href="http://www.bigdata-research.org/research/safety/">
								<img src="images/i8.png" />
							</a>
						</div>
						<div class="case-li-mengban">
							<div class=" case-word">
								<h3 class="am-gallery-title">安全大数据研究所</h3>
								<a href="http://www.bigdata-research.org/research/safety/"><span><i class="am-icon-eye"></i>查看更多</span></a>
							</div>
						</div>
					</li>

				</ul>
				<div class="lan-bott">
					<div class="left"><span>大世界，小数据</span>
						<p>Big World,Small Data</p>
					</div>
					<div class="right">
						<a href="customer-case.html">
							<span class="see-more">查看更多<i class="am-icon-angle-double-right"></i></span>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="part-title">

				</div>
			</div>
		</div>

		<div class=" news-all">
			<div class="am-container-1">
				<div class="news part-all">
					<div class="part-title">
						<a href="news.html">
							<i class="am-icon-newspaper-o part-title-i"></i>
							<span class="part-title-span">新闻动态</span>
							<p>Hengwang News</p>
						</a>
					</div>

					<div class="news-content ">

						<div class="panel panel-default table-responsive center-block" style="height: 300px;">
							<table class="table table-striped table-bordered table-hover gpleft_table">
								<tbody>
									<tr class="active">
										<thead style="background: #28A4C9;">
											<th>NO.</th>
											<th>MEDIA</th>
											<th>TIME</th>
										</thead>
									</tr>

                                <?php
                                $sql = mysqli_query($conn,"select * from article;");

                                while($res = mysqli_fetch_array($sql)) {
                                    $res["a_title"];
                                    $res["a_id"];
                                    $res["a_time"];
                                    ?>
                                    <tr class="active">
                                        <td><?php echo $res["a_id"] ?></td>
                                        <td>
                                            <a href="news_info.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
                                        </td>
                                        <td><?php echo $res["a_time"] ?></td>
                                    </tr>
									<?php
                                }
                                ?>

								</tbody>
							</table>
						</div>

					</div>

				</div>
			</div>
		</div>

		<div class="part-all gray-li">
			<div class="customer  am-container-1">
				<div class="part-title">
					<i class="am-icon-users part-title-i"></i>
					<span class="part-title-span">团队人才</span>
					<p>TEAM</p>
				</div>
			</div>
		</div>		
<div id="category_top" style="background-image: url(images/zlbg.png);">
    <div class="am-hide-lg-only kz" id="leftbtn">
        <i class="am-icon-angle-left" ></i>
    </div>
    <div class="am-hide-lg-only kz" style="right:0px;" id="rightbtn">
        <i class="am-icon-angle-right"></i>
    </div>
    <div class="am-container" >
        <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-thumbnails" id="topface">
            <li>
                <a href="#">
                <div class="ctl">
                    <img src="images/face1.jpg">
                    <h3>王红</h3>
                    <p>教授</p>
                </div>
                <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="#">
                <div class="ctl">
                     <img src="images/face1.jpg">
                    <h3>王红天</h3>
                    <p>教授</p>
                </div>
                <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/face1.jpg">
                    <h3>王红天</h3>
                    <p>教授</p>
                    </div>
                    <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/face1.jpg">
                    <h3>王红天</h3>
                    <p>教授</p>
                    </div>
                    <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/face1.jpg">
                    <h3>王红天</h3>
                    <p>教授</p>
                    </div>
                    <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="ctl">
                    <img src="images/face1.jpg">
                    <h3>王红天</h3>
                    <p>教授</p>
                    </div>
                    <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
        </ul>

    </div>

</div>
<script>
    var countnum=5 //一共多少个图 例如6个请输入5
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

		<footer class="footer ">

			<ul>

				<li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
					<div class="part-5-title">联系我们</div>
					<div class="part-5-words2">
						<span>四川省成都市高新西区西源大道2006号</span>
						<span>电话:18238765101</span>
						<span>传真:(123) 456-7890</span>
						<span>邮箱:support@vectorlab.com</span>

					</div>
				</li>
				<li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
					<div class="part-5-title">相关链接</div>
					<div class="part-5-words2">
						<ul class="part-5-words2-ul">
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="solutions.html">解决方案</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="product-show.html">产品展示</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="customer-case.html">客户案例</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="service-center.html">服务中心</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="about-us.html">关于我们</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="recruit.html">招贤纳士</a>
							</li>
							<div class="clear"></div>
						</ul>
					</div>
				</li>
				<div class="clear"></div>
			</ul>

		</footer>

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