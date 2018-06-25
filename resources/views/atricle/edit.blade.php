@extends('public.header')
@section('title','栗超 - 文章编辑')

@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{route('article.index')}}">文章列表</a></li>
        <li class="active"><a href="{{route('article.create')}}">添加文章</a></li>
    </ul>
    <form method="post" action="{{route('article.update',['id' => $data['id']])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>文章标题</label>
            <input type="text" name="title" class="form-control" value="{{$data['title']}}">
        </div>
        <div class="form-group">
            <label>文章内容</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="请输入文章内容" style="resize: none;">{{$data['content']}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">编辑文章</button>
    </form>

@endsection