<?php
$img=file('list-juru.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>