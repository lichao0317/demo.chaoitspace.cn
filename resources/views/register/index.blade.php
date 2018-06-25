@extends('public.header')
@section('title','栗超 - 注册页面')
@section('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="card">
        <div class="card-header">用户注册</div>
        <div class="card-body">
            <form method="post" action="{{route('regist')}}">
                <div class="form-group">
                    @include('public._error')
                    @csrf
                    <label for="exampleInputEmail1">用户名</label>
                    <input type="text" class="form-control"  name="username" value="{{old('username')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control"  name="password" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">立即注册</button>


                <!-- Modal -->
                {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                    {{--<div class="modal-dialog" role="document">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header">--}}
                                {{--<h5 class="modal-title" id="exampleModalLabel">23312312</h5>--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                    {{--<span aria-hidden="true">&times;</span>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                            {{--<div class="modal-body">--}}
                                {{--...--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}

                                {{--<button type="submit" class="btn btn-primary">确定</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
@endsection