<!--文章管理-->
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
    <div class="panel-head"><strong class="icon-reorder"> 文章管理</strong></div>
<!--    <div class="padding border-bottom">-->
<!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
<!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
            <th width="10%">ID</th>
            <th width="15%">标题</th>
            <th width="25%">内容</th>
            <th width="15%">发布人</th>
            <th width="15%">时间</th>
            <th width="">操作</th>
        </tr>
        <?php
        include "../public/conn.php";
        $sql = mysqli_query($conn,"select * from article;");
        while($res = mysqli_fetch_array($sql)) {
        $res["a_id"];
        $res["a_title"];
        $res["a_centUrl"];
        $res["a_user"];
        $res["a_time"];
        ?>
        <tr>
            <td><?=$res["a_id"] ?></td>
            <td><?=$res["a_title"] ?></td>
            <td><?=$res["a_centUrl"] ?></td>
            <td><?=$res["a_user"] ?></td>
            <td><?=$res["a_time"] ?><td>
                <div class="button-group">
                    <a class="button border-main" href="article_edit.php"><span class="icon-edit"></span> 修改</a>
                    <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
                </div>
        </tr>
<?php }?>
        </table>
    </div>
</body>
</html>