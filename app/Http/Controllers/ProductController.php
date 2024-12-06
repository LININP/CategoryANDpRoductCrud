<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
    return view('products.index',[
        'products'=>Product::get()
    ]);

   }

   public function create(){
    return view('products.create',[
        'categories'=>Category::get()
    ]);
   }

   public function store(Request $request){
    $product= new Product;
    $product->category_id=$request->category_id;
    $product->product_title=$request->product_title;
    $product->price=$request->price;
    $product->description=$request->description;
    $product->image=($request->has('image'))?$request->file('image')->store('product_image', 'uploads'):NULL;
    $product->save();
    return redirect()->route('productpage');
}


public function view(Product $product){

    return view('products.view',[
        'product'=>$product
    ]);
}

public function edit(Product $product) {
    return view('products.edit', [
        'categories' => Category::get(),
        'product' => $product,
    ]);
}


public function update(Request $request, Product $product)
{
    $product->category_id=$request->category_id;
    $product->product_title=$request->product_title;
    $product->price=$request->price;
    $product->description=$request->description;
    $product->image=($request->has('image'))?$request->file('image')->store('product_image', 'uploads'):NULL;

    $product->save();
    return redirect()->route('productpage');
}

public function delete(Product $product){
    $product->delete();
    return redirect()->route('productpage');

}



   }

