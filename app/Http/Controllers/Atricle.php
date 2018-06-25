<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\Atricel as art;
use Illuminate\Http\Request;

class Atricle extends Controller
{
    /**
     * Display a listing of the resource.
     *  文章主页面
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = art::get()->toArray();
        return view('atricle.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *  添加文章
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atricle.create');
    }

    /**
     * Store a newly created resource in storage.
     * 数据提交处理
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取提交内容
        $data = $request->all();
        $data['author'] = Auth::guard('baoan')->user()->username;
        art::create($data);
        session()->flash('success','文章添加成功');
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *  编辑方面与update一起使用
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = art::find($id)->toArray();
        return view('atricle.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = art::find($id);
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->save();
        session()->flash('success','文章编辑成功');
        return redirect()->route('article.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
