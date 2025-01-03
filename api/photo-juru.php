<?php
$img=file('url-pic-juru.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>