<?php include "../public/conn.php"?>
<!--栏目文章管理-->
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 文章上传管理/各栏目文章管理/学院要闻文章管理</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->
    <table class="table table-hover text-center">

        <tr>
<!--            <th width="10%">栏目ID</th>-->
            <th width="15%">栏目名称</th>
            <th width="25%">文章名称</th>
            <th width="15%">发布人</th>
            <th width="15%">时间</th>
            <th width="">操作</th>
        </tr>
        <!--        **************-->
        <?php
        $sql = mysqli_query($conn,"select * from article where a_belong = '1' group by a_id desc limit 0,5;");

        while($res = mysqli_fetch_array($sql)) {
            $res["a_title"];
            $res["a_id"];
            $res["a_time"];
            ?>
            <tr>
                <!--            <td>1</td>-->
                <td>学院要闻</td>
                <td><?php echo $res["a_title"] ?></td>
                <td>admin</td>
                <td><?php echo $res["a_time"] ?><td>
                    <div class="button-group">
                        <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
                    </div>
            </tr>
            <?php
        }
        ?>
        <!--        **************-->
    </table>
</div><br><br><br>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 文章上传管理/各栏目文章管理/系内热点文章管理</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
<!--            <th width="10%">栏目ID</th>-->
            <th width="15%">栏目名称</th>
            <th width="25%">文章名称</th>
            <th width="15%">发布人</th>
            <th width="15%">时间</th>
            <th width="">操作</th>
        </tr>

        <!--        **************-->
        <?php
        $sql = mysqli_query($conn,"select * from article where a_belong = '2' group by a_id desc limit 0,5;");

        while($res = mysqli_fetch_array($sql)) {
            $res["a_title"];
            $res["a_id"];
            $res["a_time"];
            ?>
            <tr>
                <!--            <td>1</td>-->
                <td>系内热点</td>
                <td><?php echo $res["a_title"] ?></td>
                <td>admin</td>
                <td><?php echo $res["a_time"] ?><td>
                    <div class="button-group">
                        <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
                    </div>
            </tr>
            <?php
        }
        ?>
        <!--        **************-->
    </table>
</div><br><br><br>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 文章上传管理/各栏目文章管理/校园快讯文章管理</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
<!--            <th width="10%">栏目ID</th>-->
            <th width="15%">栏目名称</th>
            <th width="25%">文章名称</th>
            <th width="15%">发布人</th>
            <th width="15%">时间</th>
            <th width="">操作</th>
        </tr>

        <!--        **************-->
        <?php
        $sql = mysqli_query($conn,"select * from article where a_belong = '3' group by a_id desc limit 0,5;");

        while($res = mysqli_fetch_array($sql)) {
            $res["a_title"];
            $res["a_id"];
            $res["a_time"];
            ?>
            <tr>
                <!--            <td>1</td>-->
                <td>校园快讯</td>
<!--                <td>--><?php //echo $res["a_title"] ?><!--</td>-->
                <td id="a_title"><?php echo $res["a_title"] ?></td>
                <td>admin</td>
                <td><?php echo $res["a_time"] ?><td>
                    <div class="button-group">
                        <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
<!--                        <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>-->
                        <a class="button border-red" href="javascript:void(0)" onclick="del(this)"><span class="icon-trash-o"></span> 删除</a>
                    </div>
            </tr>
            <?php
        }
        ?>
        <!--        **************-->
    </table>
</div><br><br><br>

<!--****************************************-->
<script>
    function del(){
        if(confirm("您确定要删除吗?")){
            var a_title1 = document.getElementById("a_title").value;
            alert(a_title1);
        }
    }
</script>
<!--****************************************-->

</body>
</html>