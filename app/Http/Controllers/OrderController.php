<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
   
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function index()
    {  
        $orders = Order::with(['product' => function($query) {  
            $query->withTrashed();  
        }])->get();  
        return view('orders.list', compact('orders'));
    }

    public function show(string $id)
    {
        $order=order::findOrFail($id);
        return view('orders.show',['order'=>$order]);
    }

    public function destroy($id)
    {  
        Order::where ('id',$id)->delete();
        return redirect()->route('orders.list');
    }
}
