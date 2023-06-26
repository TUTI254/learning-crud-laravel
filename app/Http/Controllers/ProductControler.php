<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductControler extends Controller
{
    //function to show all products
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }
    //function to show form to create new product
    public function create(){
        return view('products.create');
    }
    //fnction store data to database
    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable'
        ]);
        //store data to database using eloquent model
        $newProduct = Product::create($data);
        return redirect()->route('product.index');
    }
    //function to show single product
    public function edit(Product $product){
        return view('products.edit',['product'=>$product]);
    }
    //function to update single product
    public function update (Product $product, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable'
        ]);
        $product->update($data);

        return redirect()->route('product.index')->with("success","Product updated successfully!");
    }
    //function to delete single product
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with("success","Product deleted successfully!");
    }
}
