<?php
$img=file('list-bing.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>