<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{




    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(Request $request)
    {
        $order['user_id'] = Auth::user()->id;
        $order['product_id'] = $request->product_id;
        $order['price'] = $request->price;
        Order::create($order);
        return redirect()->back()->with('success', 'Order successfully!');
    }
}
