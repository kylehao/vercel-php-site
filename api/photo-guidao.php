<?php
$img=file('url-pic-guidao.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>