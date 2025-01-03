<?php
$img=file('url-pic-wangdong.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>