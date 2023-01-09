<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/slider', SliderController::class, ['except' => ['show', 'edit', 'update']]);
    Route::resource('/order', OrderController::class, ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
});


//لعرض صفحة المستخدم الرئيسية
Route::get('/', function () {
    $sliders = Slider::get();
    $categories = Category::get();
    $products = Product::get();
    $carts = Cart::get();
    return view('front.home', compact('sliders','categories','products','carts'));
})->name('front.home.page');
//لعرض  صفحة معلومات عننا في الصفحة الرئيسية
route::get('/about-us' , [AboutController::class, 'index'])->name('about');
//
Route::get('/show-card/{id}', [CartController::class,'show'])->name('cart.show');
Route::post('/saveCart', [CartController::class,'store'])->name('cart.save');


route::get('/order', [OrderController::class, 'index'])->name('order.index');
route::post('/update/{id}', [OrderController::class, 'update'])->name('order.update');
