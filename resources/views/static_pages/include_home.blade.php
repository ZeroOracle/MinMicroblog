<!doctype html>
<html>
<head>
    <title>简约 - 简约而不简单的微博</title>
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        iframe {
            margin: 0;
            border-style: none;
            width: 100%;
            height: 100%;
        }
    </style>

    <link href="http://libs.baidu.com/fontawesome/4.2.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/music/player.css"/>
    <!--css-->
    <link rel="stylesheet" href="/music/css/reset.css"/>
    <link rel="stylesheet" href="/music/css/style.css" media="screen" type="text/css"/>

    <div id="wenkmPlayera">

        <div id="wenkmPlayer">
            <div class="player " id="aio">


                <div class="music-player">
                    <!--<div style="background-image: url(http://i.imgur.com/yqB0erk.jpg);" class="album"></div>-->


                    <div class="info">
                        <div class="left">
                            <a href="javascript:;" class="ico-shuffle"></a>
                            <a href="javascript:;" class="ico-heart"></a>
                        </div>
                        <div class="center">
                            <div class="jp-playlist">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>

                        </div>
                        <div class="right">
                            <a href="javascript:;" class="ico-repeat"></a>
                            <a href="javascript:;" class="ico-share"></a>
                        </div>

                        <div class="Speed jp-seek-bar">
                            <span class="jp-play-bar" style="width: 0%"></span>
                        </div>
                    </div>

                    <div class="controls">
                        <div class="current jp-current-time">00:00</div>
                        <div class="play-controls">
                            <a href="javascript:;" class="ico-previous jp-previous" title="上一首"></a>
                            <a href="javascript:;" class="ico-play jp-play" title="播放"></a>
                            <a href="javascript:;" class="ico-pause jp-pause" title="暂停"></a>
                            <a href="javascript:;" class="ico-next jp-next" title="下一首"></a>
                        </div>
                        <div class="volume-level jp-volume-bar">
                            <span class="jp-volume-bar-value" style="width: 0%"></span>
                            <a href="javascript:;" class="ico-volume-up music-loud" title="max volume"></a>
                            <a href="javascript:;" class="ico-volume-down music-whisper" title="mute"></a>
                        </div>
                    </div>

                    <div id="jquery_jplayer" class="jp-jplayer"></div>

                </div>


            </div>

            <div class="switch-player" id="aiaa"><!--按钮-->
                <i class="fa fa-angle-right" style="margin-top: 20px;"></i>
            </div>
        </div>
    </div>

    <!--JS-->
    <script src="/music/172.js"></script>
    <script src="/music/scrollbar.js"></script>
    <script src="/music/player.js"></script>
    <!--JS-->
    <script src="/music/js/jquery.min.js"></script>
    <script src="/music/js/jquery.jplayer.min.js"></script>
    <script src="/music/js/jplayer.playlist.min.js"></script>
    <script src="/music/js/index.js"></script>


</head>
<body>
{{--网站总入口，使用iframe标签--}}
<iframe src="{{route('home')}}"></iframe>
{{--天气插件--}}
<script>(function (T, h, i, n, k, P, a, g, e) {
        g = function () {
            P = h.createElement(i);
            a = h.getElementsByTagName(i)[0];
            P.src = k;
            P.charset = "utf-8";
            P.async = 1;
            a.parentNode.insertBefore(P, a)
        };
        T["ThinkPageWeatherWidgetObject"] = n;
        T[n] || (T[n] = function () {
            (T[n].q = T[n].q || []).push(arguments)
        });
        T[n].l = +new Date();
        if (T.attachEvent) {
            T.attachEvent("onload", g)
        } else {
            T.addEventListener("load", g, false)
        }
    }(window, document, "script", "tpwidget", "//widget.seniverse.com/widget/chameleon.js"))</script>
<script>tpwidget("init", {
        "flavor": "bubble",
        "location": "WX4FBXXFKE4F",
        "geolocation": "enabled",
        "position": "bottom-right",
        "margin": "10px 10px",
        "language": "zh-chs",
        "unit": "c",
        "theme": "chameleon",
        "uid": "U855988E4E",
        "hash": "b91b9160ae6c5fa2a5b4284bef9fb822"
    });
    tpwidget("show");</script>

{{--标签崩溃提示--}}
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>