<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '简约') - 更精简的微博系统</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="assets/waifu.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>

</div>
<script src="/js/app.js"></script>
</body>
</html>