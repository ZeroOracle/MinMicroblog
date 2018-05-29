<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="gbk"/>
    <meta name="viewport" content="width=1024"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title>简约微博介绍！</title>
    <link rel="stylesheet" href="/css/about.css">
</head>
<body class="impress-not-supported" onload="timedCount()">

<div class="fallback-message">
    <p>您的浏览器不支持HTML5，看不到
        <ddd> 3D</ddd>
        特效，肿么办？
    </p>
    <p><b>不用怕！</b></p>
    <p>请下载最新的 <b>Chrome</b>, <b>Safari</b> 或者 <b>Firefox</b> 浏览器(360急速，搜狗的"极速模式"也可以哦~)</p>
</div>
<div id="impress">
    <div id="bored" class="step slide" data-x="-1000" data-y="-1500">
        <q><p>你觉得这仅仅是个 </p>
            <p><b> 简单的 </b>网站介绍PPT？</p></q>
    </div>

    <div class="step slide" data-x="0" data-y="-1500">
        <q>再敲一敲键盘看看 O(∩_∩)O哈哈~</q>
    </div>

    <div class="step slide" data-x="1000" data-y="-1500">
        <q><p>A U V？这好像真的是个网页PPT哎。</p>
            <p>不对啊，<b> 右边 </b>好像没有了？！！</p></q>
    </div>

    <div id="title" class="step" data-x="0" data-y="0" data-scale="4">
        <span class="try">网站作者</span>
        <h1>帐篷</h1>
        <!--span class="footnote"><sup>*</sup> no rhyme intended</span-->
    </div>

    <div id="its" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="5">
        <p>为自己代言</p>
    </div>

    <div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <p>此微博系统诞生于2018年5月14日</p>
    </div>


    <div id="tiny" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
        <p>时光<b> 如水岁月 </b>如歌
        <p>其实才刚创建没几天๑乛◡乛๑</p></p>
    </div>


    <div id="ing" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
        <p><span class="px60">前端</span> <b class="positioning">采用</b><b class="rotating">超炫的Bootstrap</b><br>
            <span class="px60">后台</span> <b class="scaling">基于优雅的Laravel</b><br/>
            <xiaozi>史上最简约的微博系统就是这样的架构，就问你们6不6？！</xiaozi>
        </p>
    </div>

    <div id="imagination" class="step" data-x="6700" data-y="-300" data-scale="6">
        <p>开局一框架 <br/><b class="imagination">代码全fork！</b></p>
    </div>

    <div id="source" class="step" data-x="6300" data-y="2000" data-rotate="20" data-scale="4">
        <p><img src="images/cat.jpg"/><br/><b>很明显，并不能！</b></p>
    </div>

    <div id="one-more-thing" class="step" data-x="5000" data-y="4000" data-scale="2">
        <p><img src="images/son.jpg"/></p>
    </div>


    <div id="its-in-3d" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10"
         data-scale="2">
        <p><span class="have">从</span> <span class="you">各个</span> <span class="noticed">方向看</span> <span class="its">我都是</span>
            <b><span class="in">爱</span></b> 你<sup>的</sup>！</p>
        <span class="footnote">(好吧我承认我是为了秀一下3D特效 ... )</span>
        <p><a href="{{route('home')}}">点击此处返回首页</a></p>
    </div>


    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>

</div>


<div class="hint">
    <p>请使用 "空格键" 或者 "↑ ↓ ← →" 操控</p>
</div>
<script>
    if ("ontouchstart" in document.documentElement) {
        document.querySelector(".hint").innerHTML = "<p>按下 "← →" 操控</p>";
    }
</script>


<script src="/js/yhc.js"></script>
<script src="/js/main.js" charset="utf-8"></script>
<script>impress().init();</script>


<div style="display: none">

</div>
</body>
</html>