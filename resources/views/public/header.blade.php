<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>
        @yield('title','首页')
    </title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">导航</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">首页</a>
                </li>
            </ul>

            @if(Auth::guard('baoan')->check())
                <a href="{{route('article.index')}}" class="btn  btn-outline-primary mr-md-2">文章列表</a>
                <a href="javascript:;" class="btn  btn-outline-primary mr-md-2">{{Auth::guard('baoan')->user()->username}}</a>
                <a href="{{route('logout')}}" class="btn btn-outline-success ">退出</a>
            @else
                <a href="{{route('log')}}" class="btn btn-outline-success mr-md-2">登陆</a>
                <a href="{{route('reg')}}" class="btn btn-outline-danger">注册</a>
            @endif
        </div>
    </nav>
    @include('public._message')
    @yield('content')
</div>
</body>
</html>