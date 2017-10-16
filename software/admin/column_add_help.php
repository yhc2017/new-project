<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/15
 * Time: 18:38
 */

include_once('../public/conn.php');

//$menu_url="";
//$sid=0;
$menu_url=$_POST['url'];
$title=$_POST['title'];
//echo $title;
$sid=$_GET["id"];

$name=$_GET['name'];
//echo $name;


//echo $title;
//echo empty($title);
//echo "insert into menu (menu_sid,menu_name,menu_url) VALUES (0,'{$title}','{$menu_url}');";

//一级菜单添加
if(!empty($title)) {
//    echo $title;
    $sql = mysqli_query($conn," insert into menu (menu_sid,menu_name,menu_url) VALUES (0,'{$title}','{$menu_url}');");
//    echo $sql;
    echo "<script>alert('添加成功！');window.location.href='column_add.php';</script>";
//    header('Location:column_add.php');
}


//echo $sid;
//子菜单添加
if(!empty($sid)) {
//    echo $sid;
//    echo $title;
    $sql = mysqli_query($conn," insert into menu (menu_sid,menu_name,menu_url) VALUES ({$sid},'{$name}','{$menu_url}');");
    echo "<script>alert('添加成功！');window.location.href='column_add.php';</script>";
//    header('Location:column_add.php');
}


