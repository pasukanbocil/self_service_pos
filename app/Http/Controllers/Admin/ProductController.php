<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index', [
            'title' => 'Product | Self Service Pos',
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.product.create', [
            'title' => 'Create Product | Self Service Pos',
            'categories' => Category::all()
        ]);
    }

    public function store(ProductFormRequest $request)
    {
        $attr = $request->validated();
        $attr['image'] = $request->file('image')->store("images/products");


        Product::create($attr);

        return redirect('/dashboard/products')
            ->with(
                'success',
                'New Product has been created!'
            )->with(
                'createError',
                'Failed to create new product!'
            );
    }
}
