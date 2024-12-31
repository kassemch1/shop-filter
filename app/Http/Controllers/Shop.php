<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class Shop extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        // Fetch filters from the request
        $selectedCategory = $request->input('category');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Query products with filters
        $products = Product::query();

        if ($selectedCategory) {
            $products->where('category_id', $selectedCategory);
        }

        if ($minPrice) {
            $products->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $products->where('price', '<=', $maxPrice);
        }

        $products = $products->get();

        return view('shop', compact('products', 'categories', 'selectedCategory', 'minPrice', 'maxPrice'));
    }

}
