<?php
$img=file('list-shima.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>