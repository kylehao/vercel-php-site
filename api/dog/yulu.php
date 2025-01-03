<?php
$f='yulu.txt';   //文件名
$a=file($f);  //把文件的所有内容获取到数组里面
$n=count($a); //获得总行数
$rnd=rand(0,$n);    //产生随机行号
$rnd_line=$a[$rnd]; //获得随机行
$tit = date('m 月 d 日')." - 酷酷的江小鑫呀";
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>社会经典语录 - 天晴了，雨停了，你又觉得国资得行了？</title>
	<meta name="description" content="我们精心熬制了有史以来最毒1000多条经典社会经典语录,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
	<meta name="keywords" content="鸡汤,社会经典语录,馊鸡汤">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="Admin@vxxt.cn" />
	<meta property="og:title" content="社会经典语录 - 壮士可要来一碗！" />
	<meta property="og:url" content="#" />
	<meta property="og:image" content="icon.png" />
	<meta property="og:site_name" content="社会经典语录 - 壮士可要来一碗！" />
	<meta property="og:description" content="我们精心熬制了有史以来最毒1000多条经典社会经典语录,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
	<link href="./img/min.css" rel="stylesheet">
	<link rel="alternate icon" type="image/png" href="icon.png">

</head>
<body>
<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <img src="./img/logo_yulu.png">
	    </div>
	    <div class="col">
	    	<div class="float-right" style="padding-top: 0px;">
	    		<a class="btn btn-primary btn-filled btn-xs" href="./index.php" >毒鸡汤</a>
	    		<a class="btn btn-primary btn-filled btn-xs" href="./yulu.php" >经语录</a>
				<a class="btn btn-primary btn-filled btn-xs" href="./dog.php" >舔狗日记</a>
				<a class="btn btn-primary btn-filled btn-xs" href="./poem.php" >古诗文</a>
	    	</div>
	    </div>
		</div>
</div>
</div>

<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence justify-content-center text-center">	
        <div class="wrapper">				
		<span id="text" style="font-size: 2rem;"><?=$rnd_line;?></span>
        <textarea id="input">我才是幕后黑手,酷酷的江小鑫。</textarea>
        </div><br>
        <button class="btn btn-primary" onclick="copyText()">点我复制</button>
</div>
</div>

<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
	            <span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="javascript:location.reload()" >再来一条</a></span>
	    </div>
  		</div>
  		</div>
 <footer>
 <p class="text-center">Copyright © 2020 <a href="https://www.111.gs" >听松阁</a> All rights reserved</p>
</footer>

</div>
<style type="text/css">
  .wrapper {position: relative;}
  #input {position: absolute;top: 0;left: 0;opacity: 0;z-index: -10;}
</style>

<script type="text/javascript">
  function copyText() {
   var text = document.getElementById("text").innerText;
   var input = document.getElementById("input");
   input.value = text; // 修改文本框的内容
   input.select(); // 选中文本
   document.execCommand("copy"); // 执行浏览器复制命令
   alert("复制成功");
  }
 </script>

</body>
</html>