<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function log(Request $request){
        $status = Auth::guard('baoan')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);
        if($status){
            session()->flash('success','恭喜你,登录成功!!欢迎回家!!!');
            return redirect('/');
        }
        session()->flash('danger','用户名或密码错误');
        return redirect()->route('login');
    }

    public function logout(){
        Auth::guard('baoan')->logout();
        session()->flash('danger','退出成功!!!');
        return redirect()->route('index');
    }
}
