<?php
$img=file('url-pic-shima.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>