<?php
$img=file('list-guidao.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>