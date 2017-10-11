<?php
include "../public/conn.php";
$preContent = $_POST['precontent'];
$prenewsTiele = "Temporary";
$premyfile = fopen("../public/article/".iconv("UTF-8","GBK",$prenewsTiele).".txt", "w") or die("Unable to open file!");
fwrite($premyfile, $preContent);
fclose($premyfile);
?>
