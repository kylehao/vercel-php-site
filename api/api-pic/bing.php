<?php
$img=file('bing.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>