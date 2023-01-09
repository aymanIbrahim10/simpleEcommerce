<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        $datas = Order::orderBy('id', 'DESC')->latest()->paginate(5);
        $product = Product::get();
        return view('page.order.index', compact('datas','product'));
    }

    public function update($id, Request $request)
    {
         $orders = Order::find($id);
        // return $orders;
        $orders ->update($request->all());
        Session::flash('message', Lang::get('web.create-success'));
        return redirect()->route('order.index');
    }
}
