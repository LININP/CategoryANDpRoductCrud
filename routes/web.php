<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TaskController::class,'index'])->name('home');
Route::get('/add',[TaskController::class,'add'])->name('add_task');
Route::post('/',[TaskController::class,'create'])->name('created');
Route::get('/view',[TaskController::class,'read'])->name('view_task');
Route::get('/edit/{id}/edit',[TaskController::class,'edit'])->name('show_edit_task');
Route::put('/update/{id}/update', [TaskController::class,'update'])->name('updated_details');
Route::delete('/delete/{id}', [TaskController::class,'delete'])->name('updated');



Route::get('categories',[CategoryController::class,'index'])->name('category_index');
Route::get('categories/create',[CategoryController::class,'create'])->name('addpage');
Route::post('categories/store',[CategoryController::class,'store'])->name('storepage');
Route::get('categories/view',[CategoryController::class,'view'])->name('viewpage');
Route::get('categories/{category}/edit', [CategoryController::class,'edit'])->name('cat_edit');
Route::put('categories/{category}/update',[CategoryController::class, 'update'])->name('cat_update');
Route::delete('categories{category}/delete',[CategoryController::class,'delete'])->name('cat_deleted');


Route::get('products',[ProductController::class,'index'])->name('productpage');
Route::get('products/create',[ProductController::class,'create'])->name('create_products');
Route::post('products/store',[ProductController::class,'store'])->name('store_prodcts');
Route::get('products/view',[ProductController::class,'view'])->name('view_products');
Route::get('products/{product}/edit',[ProductController::class,'edit'])->name('edit_products');
Route::put('products/{product}/update',[ProductController::class,'update'])->name('updated_products');
Route::delete('products/{product}/delete',[ProductController::class,'delete'])->name('deleted_products');


Route::get('news',[NewsController::class,'index'])->name('news_page');
Route::get('news/create',[NewsController::class,'create'])->name('create_news');
Route::post('news/store',[NewsController::class,'store'])->name('store_news');
Route::get('news.view',[NewsController::class,'view'])->name('view_newses');
Route::get('news/{news}/edit',[NewsController::class,'edit'])->name('edit_news');
Route::put('news/{news}/update',[NewsController::class,'update'])->name('updated_news');
Route::delete('news/{news}/delete',[NewsController::class,'delete'])->name('deleted_news');






























