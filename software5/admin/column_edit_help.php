
<!--//栏目添加页面-->
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>栏目修改</strong></div>

    <div class="body-content">

        <form method="post" class="form-x" action="上传文章.php">
            <input class="hidden" name="a_id" value="...">

            <div class="form-group">
                <div class="label">
                    <label>栏目名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="field">
                <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
                <a class="button border-main" href="column_edit.php"><span class=""></span> 取消</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>