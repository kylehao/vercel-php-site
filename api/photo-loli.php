<?php
$img=file('url-pic-loli.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>