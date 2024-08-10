<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categories(Request $request){
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
    public function createCategory(Request $request){
        return view('create-category');
    }
    public function storeCategory(Request $request){
        $request->validate([
            'category' => 'required',
        ]);
        $category = Category::create([
            'categories' => $request->category,
        ]);
        return redirect()->route('categories')->with('successMsg', 'Category created successfully');
    }
    public function deleteCategory($id){
        $category = Category::where("categories_id",$id);
        $category->delete();
        return redirect()->route('categories')->with('successMsg', 'Category deleted successfully');
    }
    public function edit($id){
        $category = Category::where("categories_id",$id)->get();
        return view('edit-categories', compact('category'));
    }
    public function update(Request $request){
        $request->validate([
            'categories' => 'required',
            ]);
            $category = Category::where("categories_id",$request->post("categories_id"))->update([
                'categories' => $request->post("categories"),
                ]);
                return redirect()->route('categories')->with('successMsg', 'Category updated successfully');

    }

}
