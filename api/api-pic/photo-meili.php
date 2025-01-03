<?php
$img=file('list-meili.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>