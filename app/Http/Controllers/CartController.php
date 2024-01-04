<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('dashboard.cart.detail', [
            'title' => 'Cart | Self Service Pos',
            'carts' => Cart::where('user_id', auth()->id())->get()
        ]);
    }

    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id'
        ]);

        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'qty' => 1  
        ]);

        return redirect('/carts/detail')->with('success', 'Product added to cart');
    }
}
