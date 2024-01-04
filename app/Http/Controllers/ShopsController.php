<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index()
    {
        return view('dashboard.shops.index', [
            'title' => 'Shops | Self Service Pos',
            'products' => Product::all()
        ]);
    }
}
