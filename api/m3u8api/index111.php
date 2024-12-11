<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>智云影音 - 在線播放器</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!--<link rel="stylesheet" href="static/css/759668944ea847b48f7df4d8231fe7bb.css">
    <script src="static/js/flv.min.js"></script>
    <script src="static/js/flv.js"></script>
    <script src="static/js/hls.min.js"></script>
    <script src="static/js/hls.js"></script>
    <script src="static/js/dash.all.min.js"></script>
    <script src="static/js/webtorrent.min.js"></script>
    <script src="static/js/999fc24e5ecf41c8a747ae50bf1cb1b0.js"></script>
    <script src="static/js/dplayer.min.js"></script>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/github-markdown-css">
    <script src="https://cdn.jsdelivr.net/npm/flv.js/dist/flv.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/flv.js/1.5.0/flv.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js/dist/hls.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/hls.js/8.0.0-beta.3/hls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dashjs/dist/dash.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/webtorrent/latest/webtorrent.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pearplayer"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/dplayer/1.25.1/DPlayer.min.js"></script>
</head>
<body>

<style type="text/css">
    body,html{width:100%;height:100%;background:#0d1923;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
    *{margin:0;border:0;padding:0;text-decoration:none}
    #stats{position:fixed;top:5px;left:10px;font-size:12px;color:#fdfdfd;z-index:2147483647;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
    #dplayer{position:inherit:width: 100%;height: 250px;}
	logo:{
		show:true,
		src:'static/picture/avatar.png',
		position:'right',
		style:{}
	}
    body{
	   background:#aaa
    }

	@media only screen and (max-width: 580px) {
		.video, .video-js {
			height: 400px !important;
		}
	}

	@media only screen and (min-width: 581px) and (max-width: 767px) {
		.video, .video-js {
			height: 400px !important;
		}
	}

	@media only screen and (min-width: 768px) and (max-width: 991px) {
		.video, .video-js {
			height: 500px !important;
		}
	}

	@media only screen and (min-width: 1280px) and (max-width: 1980px) {
		.video, .video-js {
			height: 700px !important;;
		}
	}

	.video, .video-js {
		width: 100% !important;
	}
</style>
<div id="dplayer" style="width: 100%; height: 100%"></div> 
</body>
<script>
   const dp = new DPlayer({
    container: document.getElementById('dplayer'),
    autoplay: true,
    theme: '#FFCC28',
    lang: 'zh-TW',
    airplay:true,
    chromecast:true,
    preload:'auto',
    volume:'0.7',
    logo:'',
    live: true,
    video: {
        url: '<?php echo $_GET['url'];?>',
        type: 'hls',
    },
});
</script>
<script type="text/javascript">
	function is_weixin() {
		var ua = navigator.userAgent.toLowerCase();
		if (ua.match(/MicroMessenger/i) == "micromessenger") {
			return true;
		} else {
			return false;
		}
	}
	var isWeixin = is_weixin();
	var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight: document.documentElement.clientHeight;
	function loadHtml() {
		var div = document.createElement('div');
		div.id = 'weixin-tip';
		div.innerHTML = '<p><img src="static/picture/wechat1.png" alt="微信打开"/></p>';
		document.body.appendChild(div);
	}

	function loadStyleText(cssText) {
		var style = document.createElement('style');
		style.rel = 'stylesheet';
		style.type = 'text/css';
		try {
			style.appendChild(document.createTextNode(cssText));
		} catch(e) {
			style.styleSheet.cssText = cssText; //ie9以下
		}
		var head = document.getElementsByTagName("head")[0]; //head标签之间加上style样式
		head.appendChild(style);
	}
	var cssText = "#weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 100;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
	if (isWeixin) {
		loadHtml();
		loadStyleText(cssText);
	}
</script>
</html>

