<?php
$img=file('list-xinggan.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>