<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->category_id = 0;
        $category->save();
        return redirect(route('category.show',['category'=>$category]));
    }


    public function show(Category $category)
    {
        $products = $category ->products();
        foreach($products as $product){
            dd($product->name);
        }
        dd("hat nicht funktioniert");
        return view('category.show',['category'=>$category]);
    }


    public function edit(Category $category)
    {
        return view('category.edit',['category'=>$category]);
    }


    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.show',['category'=>$category]));
    }


    public function destroy(Category $category)
    {
        //
    }
}
