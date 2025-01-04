<?php
$domainName = $_SERVER['HTTP_HOST'];
$img=file('https://'.$domainName.'url-pic-xinggan.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>