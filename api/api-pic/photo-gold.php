<?php
$img=file('list-gold.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>