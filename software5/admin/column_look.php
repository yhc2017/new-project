<!--文章管理-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <th width="40%">栏目ID</th>
            <th width="40%">栏目名称</th>
            <th></th>
        </tr>
        <?php
        include "../public/conn.php";
        $sql = mysqli_query($conn,"select * from columns;");
        while($res = mysqli_fetch_array($sql)) {
        $res["co_id"];
        $res["co_name"];
        ?>
        <tr>
            <td><?php echo $res["co_id"] ?></td>
            <td><?php echo $res["co_name"] ?></td>
        </tr>

<?php }?>
    </table>
</div>
</body>
</html>