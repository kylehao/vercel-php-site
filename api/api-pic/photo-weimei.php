<?php
$img=file('list-weimei.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>