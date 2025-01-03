<?php
$img=file('url-pic-weimei.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>