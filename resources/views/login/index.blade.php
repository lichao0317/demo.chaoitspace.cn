@extends('public.header')
@section('title','栗超 - 登陆页面')
@section('content')
    <div class="card">
        <div class="card-header">用户登陆</div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">用户名</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="form-check mt-3">
                    <button type="submit" class="btn btn-primary">立即登陆</button>
                </div>
            </form>
        </div>
    </div>
@endsection