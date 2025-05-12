<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::getCart(auth()->id());
        return response()->json($cart);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $cart = Cart::addItem(auth()->id(), $validated);
        return response()->json($cart);
    }

    public function destroyItem($index)
    {
        $cart = Cart::removeItem(auth()->id(), $index);
        return response()->json($cart);
    }

    public function destroy()
    {
        $cart = Cart::clearCart(auth()->id());
        return response()->json($cart);
    }
}