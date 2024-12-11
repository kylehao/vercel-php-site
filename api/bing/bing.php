<?php
$str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$array=json_decode($str);
$url='https://cn.bing.com'.$array->images[0]->urlbase.'_1920x1080.jpg';
if($url) {
  header('Content-Type: image/JPEG');
  @ob_end_clean();
  @readfile($url);
  @flush();
  @ob_flush();
  exit;
} else {
  exit('error');
}
?>