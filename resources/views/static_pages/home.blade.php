@extends('layouts.default')
@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>微博列表</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
        {{--Live2d--}}
        <div class="waifu">
            <div class="waifu-tips"></div>
            <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
            <div class="waifu-tool">
                <span class="fui-home"></span>
                <span class="fui-chat"></span>
                <span class="fui-eye"></span>
                <span class="fui-user"></span>
                <span class="fui-photo"></span>
                <span class="fui-cross"></span>
            </div>
        </div>
        {{--Live2d的js--}}
        <script src="assets/waifu-tips.js"></script>
        <script src="assets/live2d.js"></script>
        <script type="text/javascript">initModel("assets/")</script>
    @else
        <div class="jumbotron">
            <h1>简约•微博</h1>
            <p class="lead">
                欢迎来到简约微博系统主页
            </p>
            <p>
                一切，将从这里开始。
            </p>
            <p>
                <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
            </p>
        </div>
    @endif
@stop