@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            @if(Auth::user())
                <a class="btn btn-lg btn-success" href="{{ route('users.show', [Auth::user()]) }}" role="button">{{ Auth::user()->name }}</a>
            @else
                <a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">现在登录</a>
            @endif
        </p>
    </div>
@stop
