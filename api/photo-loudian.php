<?php
$img=file('url-pic-loudian.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>