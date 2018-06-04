<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Category::all();
        return view('admin.category.list',array('list'=>$list));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ],[
            'name.required' =>' Tên danh mục bắt buộc phải nhập!!!',
        ]);
        $c = new Category();
        $c->name = $request->name;
        $c->parent_id = 0;
        $c->save();
        Session::flash('Success','Created New Category');
        return redirect('admin/category');
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);//ham kiem tra, khong quan trong
        return view('admin.category.edit',['cate'=>$category]);
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
        $this->validate($request,[
            'name' => 'required'
        ],[
            'name.required' =>' Tên danh mục bắt buộc phải nhập!!!',
        ]);//bat loi form
        $cate = Category::findOrFail($id);
        $cate->name = $request->name;
        $cate->save();
        Session::flash('Success','Update "'.$cate->name.'" Category');
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::findOrFail($id);
        $cate->delete();
        Session::flash('Success','Delete "'.$cate->name.'" Category');
        return redirect('admin/category');
    }
}
