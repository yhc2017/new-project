<?php include "../public/conn.php";
$sql1 = mysqli_query($conn,"SELECT footer_relation FROM footerInfo;");
$sql2 = mysqli_query($conn,"SELECT footer_cooperation FROM footerInfo;");

$res1 = mysqli_fetch_array($sql1);
$res2 = mysqli_fetch_array($sql2);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<footer class="footer" style="font-size: 13px;">

    <ul>
        <li class="am-u-lg-6 am-u-md-6 am-u-sm-12">
            <div class="part-5-title">联系我们</div>
            <div>
                <?=$res1['footer_relation']?>
            </div>
        </li>

        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">合作单位</div>
            <div>
                <?=$res2['footer_cooperation']?>
            </div>
        </li>
    </ul>
</footer>
</body>
</html>