<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function reg(Request $request){
        $data = $request->validate([
            'username' => 'required|min:3|unique:users',
            'password' => 'required|min:5|max:10|confirmed'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        session()->flash('success','注册成功');
        return redirect()->route('index');
    }
}
