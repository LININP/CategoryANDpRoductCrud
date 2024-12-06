<?php

namespace App\Http\Controllers;
use App\Models\News;


use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('news.index',[
            'news'=>News::get()
        ]);
    }

    public function create(){
        return view('news.create');
    }

    public function store(Request $request){
        $news= new News;
        $news->title=$request->title;
        $news->date=$request->date;
        $news->short_description=$request->short_description;
        $news->description=$request->description;
        $news->image=($request->has('image'))?$request->file('image')->store('news_image', 'uploads'):NULL;
        $news->save();
        return redirect()->route('news_page');
    }

    public function view(News $news){
     return view('news.index',[
        'news'=>$news]);
    }

    public function edit(News $news) {
        return view('news.edit', [
        'news' => $news,
        ]);
    }

    public function update(Request $request, News $news)
    {
        $news->title=$request->title;
        $news->date=$request->date;
        $news->short_description=$request->short_description;
        $news->description=$request->description;
        $news->image=($request->has('image'))?$request->file('image')->store('news_image', 'uploads'):NULL;
        $news->save();
        return redirect()->route('news_page');
    }

    public function delete(News $news){
        $news->delete();
        return redirect()->route('news_page');

    }

}
