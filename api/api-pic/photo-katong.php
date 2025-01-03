<?php
$img=file('list-katong.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>