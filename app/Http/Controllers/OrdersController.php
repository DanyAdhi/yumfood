<?php

namespace App\Http\Controllers;

use App\Order;
use App\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;



class OrdersController extends Controller
{
    
    public function index()
    {
        $order = OrderResource::collection(Order::with(['detail_order', 'detail_order.menus'])->get());
        return $order;
    }

    
    public function store(Request $request)
    {
        $order = Order::create([
            "total_order"   => $request->total_order,
            "request"       => $request->message
        ]);

        foreach ($request->detail as $value) {
            $order->detail_order()->create([
                "menu_id"    => $value["menu_id"],
                "price"      => $value["price"],
                "quantity"   => $value["quantity"],
            ]);
        }

        return response()->json([
            'message' => 'Data successfully inserted'
            ], 201);
    }

    
    public function show(Order $order)
    {
        //
    }

    
    public function update(Request $request, Order $order)
    {
        //
    }

   
    public function destroy(Order $order)
    {
        //
    }
}
