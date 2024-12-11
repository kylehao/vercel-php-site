<?php
$img=file('126.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>