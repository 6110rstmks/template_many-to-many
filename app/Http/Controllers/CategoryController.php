<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // go to category list page

    public function index()
    {
        $categories = Category::latest()->get();

        return view('welcome')
            ->with(['categories' => $categories]);
    }

    // go to category single page

    public function show(Category $category)
    {
        $dropDownCategories = Category::latest()->get();

        return view('categories.show', compact('category', 'dropDownCategories'));
    }

    // create new category

    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect()
            ->route('home');
    }
}
