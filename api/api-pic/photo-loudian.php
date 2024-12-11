<?php
$img=file('list-loudian.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>