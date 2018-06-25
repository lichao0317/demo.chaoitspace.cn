@extends('public.header')
@section('title','栗超 - 文章列表')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{route('article.index')}}">文章列表</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="{{route('article.create')}}">添加文章</a></li>
    </ul>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">编号</th>
            <th scope="col">文章标题</th>
            <th scope="col">文章作者</th>
            <th scope="col" width="150">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $k => $v)
            <tr>
                <th scope="row">{{$v['id']}}</th>
                <td>{{$v['title']}}</td>
                <td>{{$v['author']}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('article.edit',['id'=>$v['id']])}}" class="btn btn-primary mr-2">编辑</a>
                        <a href="" class="btn btn-danger">删除</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


