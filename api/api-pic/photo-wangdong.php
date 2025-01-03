<?php
$img=file('list-wangdong.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>