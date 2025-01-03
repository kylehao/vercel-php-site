<?php
$img=file('url-pic-meili.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>