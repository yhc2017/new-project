<!--文章管理-->
<?php
$id=$_GET['id'];
$sid=$_GET['sid'];
$name=$_GET['name'];
$url=$_GET['url'];
//echo $id;
?>

<html>
<head>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span>各栏目菜单编辑</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="column_edit_help.php" >
    <div class="form-group">

        <div class="label">
            <label>父栏目ID：</label>
        </div>
        <div class="field">
            <input id="sid" type="text" class="input w50" value="<?=$sid?>" name="sid" data-validate="required:请输入id" />
        </div>
        <div class="label">
            <label>栏目名称：</label>
        </div>
        <div class="field">
            <input id="name" type="text" class="input w50" value="<?=$name?>" name="name" data-validate="required:请输入栏目名称" />
        </div>
        <div class="label">
            <label>栏目链接：</label>
        </div>
        <div class="field">
            <input id="url" type="text" class="input w50" value="<?=$url?>" name="url" />
            <input type="hidden" value="<?=$id?>" name="id">
            <div class="tips">
                <button class="button bg-main icon-check-square-o" type="submit">确定修改</button>
            </div>
        </div>

    <table class="table table-hover text-center">
        <tr>
            <th width="40%">栏目ID</th>
            <th>父栏目ID</th>
            <th width="40%">栏目名称</th>
            <th width="">操作</th>
        </tr>
        <?php
        include "../public/conn.php";
        $sql = mysqli_query($conn,"select * from menu;");
        while($res = mysqli_fetch_array($sql)) {
            $res["menu_id"];
            $res["menu_sid"];
            $res["menu_name"];
            $res["menu_url"];
            ?>
            <tr>
                <td><?=$res["menu_id"];?></td>
                <td><?=$res["menu_sid"];?></td>
                <td><?=$res["menu_name"];?></td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="#add" onclick="editColumn(<?=$res['menu_id'];?>,<?=$res['menu_sid'];?>,'<?=$res['menu_name'];?>','<?=$res['menu_url']?>')"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="return deleteColumn(<?=$res['menu_id'];?>)"><span class="icon-trash-o"></span> 删除</a>
                    </div>
                </td>
            </tr>
        <?php }?>

    </table>
        </div>
            </form>
        </div>
</div>
<script>
    function editColumn(id,sid,name,url){
        window.location="column_edit.php?id="+id+"&sid="+sid+"&name="+name+"&url="+url;
    }
    function  deleteColumn(id){
        if(confirm("确认删除吗？")){
            window.location="column_delete_help.php?id="+id;
        }

    }
</script>
</body>
</html>