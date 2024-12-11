<?php
$img=file('list-loli.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>