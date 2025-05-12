<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::getOrderHistory(auth()->id());
        return view('profile.orders', compact('orders'));
    }

    public function store(Request $request)
    {
        $cart = Cart::getCart(auth()->id());
        
        $order = Order::create([
            'user_id' => auth()->id(),
            'order_number' => 'ORD-' . time(),
            'total_amount' => $cart->total,
            'status' => 'Оформлен',
            'delivery_method' => $request->delivery_method,
            'delivery_method_text' => $request->delivery_method_text,
            'items' => $cart->items
        ]);

        Cart::clearCart(auth()->id());

        return response()->json([
            'success' => true,
            'message' => 'Заказ оформлен успешно!',
            'order' => $order
        ]);
    }

    public function destroy()
    {
        $count = Order::clearHistory(auth()->id());
        return response()->json([
            'success' => true,
            'message' => 'История заказов очищена',
            'count' => $count
        ]);
    }
}