/*
 歌曲配置 js
*/
$(document).ready(function () {
    var playlist = [
        {
            title: "Luv Letter",
            artist: "DJ Okawari",
            mp3: "http://link.hhtjim.com/163/406232.mp3",
            poster: "images/1.jpg"
        },
        {
            title: "一笑倾城",
            artist: "汪苏泷",
            mp3: "http://link.hhtjim.com/163/426852063.mp3",
            poster: "images/1.jpg"
        },
        {
            title: "红昭愿",
            artist: "音阙诗听",
            mp3: "http://link.hhtjim.com/163/452986458.mp3",
            poster: "images/1.jpg"
        },
        {
            title: "moinoi moinoi",
            artist: "清水信之",
            mp3: "http://link.hhtjim.com/163/521654.mp3",
            poster: "images/1.jpg"
        }
    ];

    var cssSelector = {
        jPlayer: "#jquery_jplayer",
        cssSelectorAncestor: ".music-player"
    };

    var options = {
        swfPath: "Jplayer.swf",
        supplied: "ogv, m4v, oga, mp3"
    };

    var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);

});