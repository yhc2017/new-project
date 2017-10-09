<meta charset="utf-8" />
<?php
include "../public/conn.php";
$preContent = $_POST['precontent'];
$newsContent = $_POST['content'];
$newsTiele = $_POST['title'];
$newsUrl = $_POST['url'];
date_default_timezone_set('PRC');
$showtime = date("Y-m-d H:i:s");
mysqli_query($conn,"insert into article values(NULL ,'".$newsTiele."','".$newsTiele."', '','".$showtime."');");
echo $newsContent,$newsTiele,$preContent;
$myfile = fopen("../public/article/".iconv("UTF-8","GBK",$newsTiele).".txt", "w") or die("Unable to open file!");
fwrite($myfile, $newsContent);
fclose($myfile);

$prenewsTiele = "KK";
$premyfile = fopen("../public/article/".iconv("UTF-8","GBK",$prenewsTiele).".txt", "w") or die("Unable to open file!");
fwrite($premyfile, $preContent);
fclose($premyfile);


//$sql = mysqli_query($conn,"select a_title from article where a_time = '".$showtime."';");
//$res = mysqli_fetch_array($sql);
//iconv("UTF-8","GBK",$res[1])
//echo "<script>alert('news:".iconv("UTF-8","GBK",$res["a_title"])."success!');window.location.href='test.php';</script>";
?>
