<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    function create(){
        return view('admin.category.create');
    }

    function add(Request $request){
        
        $category = new Category(); // creates an empty array []
        $category->category_name = $request->category_name; // ['student_name':'Ram']
        $category->save();
        return redirect('/categories')->with('message', 'Category created Successfully');
    }
    
    function delete($id){
        $campaings = Category::find($id);
        $campaings->delete();
        return redirect('/categories')->with('message', 'Category created Successfully');
    }

    function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    function update(Request $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->update();
        return redirect('/categories')->with('status','updated');
    }
}