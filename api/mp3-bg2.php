<?php

function read(...$filelist) {
    $list = [];
    foreach ($filelist as $file) {
        $handle = fopen($file, 'r');
        while (($line = fgets($handle)) !== false) {
            array_push($list, trim($line));
        }
        fclose($handle);
    }
    return $list;
}

$domainName = $_SERVER['HTTP_HOST'];
$list = read('https://'.$domainName.'/url/url-mp3-bg2.txt');
$url = $list[array_rand($list)];

header("Location: {$url}");