<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            'title' => 'Category | Self Service Pos',
            'categories'=> Category::all()
        ]);
    }
}
