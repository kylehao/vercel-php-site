<?php
$domainName = $_SERVER['HTTP_HOST'];
$img=file('https://'.$domainName.'/url/url-pic-guidao.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>