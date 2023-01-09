<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show($id){
        $productToCart =  Product::Find($id);
        return view('front.cart.create',compact('productToCart'));
    }
    public function store(Request $request){
        if(auth()->user()){
            $total = $request -> price * $request -> qty;
            $Store = Cart::create([
                'product_id' => $request -> id,
                'customer_id' => Auth::user()->id,
                'qty' => $request -> qty,
                'price' => $total,
                'weight' => $request -> weight
            ]);

            $Car_id = Cart::latest()->first()->id;
            Order::create([
                'invoice_id' => $Car_id,
                'name' => $request -> product_name,
                'qty' => $request -> qty,
                'price' => $total,
                'status' => 0,
            ]);
            return redirect()->back();

            if($Store)
                return response()->json([
                    'status' => true,
                    'msg' => 'تم الحفظ بنجاح',
                ]);
            else
            return response()->json([
                'status' => false,
                'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
            ]);
        }else{
            return redirect()->back()->with('error' , 'يجب عليك تسجيل الدخول اول');
        }

    }
}
