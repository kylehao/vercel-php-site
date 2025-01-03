<?php
$img=file('url-pic-bing1.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>