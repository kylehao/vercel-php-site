<?php
$img=file('url-pic-gold.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>