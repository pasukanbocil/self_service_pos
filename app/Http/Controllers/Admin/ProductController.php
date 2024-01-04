<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $attr['image'] = $request->file('image')->store("images-products");


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

    public function edit($id)
    {
        return view('dashboard.product.edit', [
            'title' => 'Edit Product | Self Service Pos',
            'product' => Product::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    public function update(ProductFormRequest $request, $id)
    {
        $attr = $request->validated();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $attr['image'] = $request->file('image')->store("images-products");
        }



        Product::findOrFail($id)->update($attr);

        return redirect('/dashboard/products')
            ->with(
                'success',
                'Product has been updated!'
            )->with(
                'updateError',
                'Failed to update product!'
            );
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();

        return redirect('/dashboard/products')
            ->with(
                'success',
                'Product has been deleted!'
            )->with(
                'deleteError',
                'Failed to delete product!'
            );
    }
}
