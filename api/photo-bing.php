<?php
$domainName = $_SERVER['HTTP_HOST'];
$img=file('https://'.$domainName.'/url-pic-bing.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>