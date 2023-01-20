<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function store(Request $request, Category $category)
    {
        $product = new Product();

        $product->name = $request->name;

        $product->save();

        // Log::debug($product);

        // $lastProduct = Product::orderBy('id', 'desc')->limit(1)->get();
        // $category->products()->attach($lastProduct);
        // $thisCategory->products()->syncWithoutDetaching($lastProduct->id);
        $category->products()->syncWithoutDetaching($product->id);

        return redirect()
            ->route('show', $category);

    }

    public function checkbox(Category $category, Product $product, Category $dropDownCategory)
    {
        // $product->categories()->syncWithoutDetaching($dropDownCategory->id);
        $product->categories()->toggle($dropDownCategory->id);



        return redirect()
            ->route('show', $category);
    }
}
