<?php
$img=file('url-pic-bing.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>