<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    
    function product(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.product',compact('products','categories'));
    }

    function createProduct(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    function addProduct(Request $request){
        $product = new Product(); // creates an empty array []
        $product->name = $request->name;
        $file = $request->file('product_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $product->product_image = $filename;
        $product->description = $request->description;
        $product->actual_price = $request->actual_price;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('/shop-product')->with('status', 'Product created Successfully');
    }

    function editProduct($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    function updateProduct(Request $request, $id){
       
            $product = Product::find($id);
            $product->category_id = $request->input('category_id');
            $destination = 'uploads/product/'.$product->product_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);

            $product->product_image = $filename;
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->actual_price = $request->input('actual_price');
            $product->discount_price = $request->input('discount_price');
            $product->update();
            return redirect('/shop-product')->with('status', 'updated');
    }

    function deleteProduct($id){
        $products = Product::find($id);
        $destination = 'uploads/product/' . $products->product_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $products->delete();
        return redirect()->back()->with('status', 'campaign deleted');
    }

    function shop(){
        $shops = Product::all();
        return view('user.shop', compact('shops',));

    }

    function productPage($id){
        $shop = Product::find($id);
        return view('user.shopPage', compact('shop'));
    }

}
