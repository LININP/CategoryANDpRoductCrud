<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index',[
            'categories'=>Category::get()
        ]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $category= new Category;
        $category->title=$request->title;
        $category->save();
        return redirect()->route('category_index');
    }

    public function view(Category $category){

        return view('categories.view',[
            'category'=>$category
        ]);
    }

    public function edit(Category $category){
    return view('categories.edit',[
           'category'=>$category
    ]);

    }

    public function update(Request $request,Category $category){
        $category->title=$request->title;
        $category->save();
        return redirect()->route('category_index');


    }

public function delete(Category $category){
    $category->delete();
    return redirect()->route('category_index');

}

}
