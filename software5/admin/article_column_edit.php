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
    <div class="panel-head"><strong class="icon-reorder"> 栏目文章修改</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
            <th width="30%">栏目名称</th>
            <th width="30%">文章名称</th>
            <th>操作</th>
        </tr>

        <tr>
            <td><select name="column"><option value="columns">自然</option><option value="columns">科学</option></select></td>
            <td>论科学</td>
            <td>
            <div class="button-group">
                <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
                <a class="button border-main" href="column_edit.php"><span class=""></span> 取消</a>
                </div>
            </td>
        </tr>

    </table>
</div>
</body>
</html>