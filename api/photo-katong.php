<?php
$img=file('url-pic-katong.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>