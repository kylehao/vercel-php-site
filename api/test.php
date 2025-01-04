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
$list = read('https://raw.githubusercontent.com/kylehao/vercel-php-site/refs/heads/main/url/url-mp3-az1.txt');
$url = $list[array_rand($list)];

header("Location: {$url}");