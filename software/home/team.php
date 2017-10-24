<?php include "../public/conn.php"?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>研究人才队伍</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
		<link rel="stylesheet" href="css/amazeui.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include ("header.php");?>
		<div class="toppic" style="margin-top: 80px;">
			<div class="am-container-1">
				<div class="toppic-title left">
					<i class="am-icon-dropbox toppic-title-i"></i>
					<span class="toppic-title-span">人才队伍</span>
					<p>TEAM</p>
				</div>
				<div class="right toppic-progress">
					<span><a href="index.php" class="w-white">首页</a></span>
					<i class=" am-icon-arrow-circle-right w-white"></i>
					<span><a href="product-show.html" class="w-white">人才队伍</a></span>
				</div>
			</div>
		</div>

		<div class="am-u-sm-0 am-u-md-0 am-u-lg-2" style="margin-left: 100px;">
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
                公告
            </h2>
        </div>
        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
            <ul class="am-list"  >
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd"><a href="team.html">&nbsp 人才队伍</a></h3>
                    </div>
                </li>
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd"><a href="general-profile.html">&nbsp 中心概况</a></h3>
                    </div>
                </li>
            </ul>
        </div>
       </div>
		
		<div class="am-g am-container" style="margin-top: 50px;">
    		<div class="am-u-sm-5 am-u-md-10 am-u-lg-9">
    			<div>
    				<div align="center"><h1>研究人才队伍</h1></div>
    					<table class="am-table" >
    						 <thead>
						        <tr>
						            <th style="border-bottom: none;"><h3 >主要负责人</h3></th>
						        </tr>
						    </thead>
						    <tbody>
                            <tr>
                                    <?php
                                    $sql = mysqli_query($conn, "select team_name from ins_team where team_level='主要负责人';");

                                    while ($res = mysqli_fetch_array($sql)) {
                                        $res["team_name"];
                                        ?>

                                        <td><a href="#"><?=$res["team_name"]?></a></td>

                                        <?php
                                    }
                                    ?>
                            </tr>


						        
						    </tbody>
						</table>
    					<table class="am-table" rules=none>
    						 <thead>
						        <tr>
						            <th style="border-bottom: none;"><h3>技术骨干</h3></th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						        </tr>
						        <tr>
						            <td>薛建民</td>
						            <td>谭兆信</td>
						            <td>姚恩建</td>
						        </tr>
						    </tbody>
						</table>
						<table class="am-table" rules=none>
    						 <thead>
						        <tr>
						            <th style="border-bottom: none;"><h3>团队成员</h3></th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						        </tr>
						        <tr>
						            <td>薛建民</td>
						            <td>谭兆信</td>
						            <td>姚恩建</td>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						        </tr>
						        <tr>
						            <td>薛建民</td>
						            <td>谭兆信</td>
						            <td>姚恩建</td>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						        </tr>
						        <tr>
						            <td>薛建民</td>
						            <td>谭兆信</td>
						            <td>姚恩建</td>
						            <td>张屹</td>
						            <td>黄友谦</td>
						            <td>侯广坤</td>
						        </tr>
						    </tbody>
						</table>
    				<hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
    			</div>
    		</div>
    	</div>
	

		<?php include ("footer_dome.php");?>

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