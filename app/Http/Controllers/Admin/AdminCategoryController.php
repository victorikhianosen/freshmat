<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index() {

        $categorys = Category::latest()->paginate(20);
        // $categorys = Category::paginate(10);
        return view('admin.category.index', compact('categorys'));
    }
    public function store(Request $request) {
        $formField = $request->validate([
            'name' => 'required',
        ]);

        $category = Category::where('name', $formField['name'])->first();

        if($category) {
            return back()->with('error', 'Category exist');
        } else {
            Category::create($formField);
            return back()->with('success','Category add successfully');
        }

    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }
    public function delete(Request $request, $id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Category deleted successfully');

    }


}
