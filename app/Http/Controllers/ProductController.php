<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::get();
        return view('product.index',compact('products'));

    }


    public function create()
    {
        return view('product.create');
    }


    public function store(StoreProduct $request)
    {
        $request->validate();
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect(route('product.show',['product'=>$product]));
    }


    public function show(Product $product)
    {
        return view('product.show',['product'=>$product]);
    }


    public function edit(Product $product)
    {
        return view('product.edit',['product'=>$product]);
    }


    public function update(StoreProduct $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect(route('product.show',['product'=>$product]));
    }


    public function destroy(Product $product)
    {
        //
    }
}
