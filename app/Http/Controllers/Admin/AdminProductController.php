<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products  = Product::latest()->paginate(10);
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('admin.product.index', compact('products', 'categories', 'tags'));
    }
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('admin.product.create', compact('categories', 'tags'));
    }



    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',
            'amount' => 'required|numeric',
            'discount' => 'nullable|numeric|min:0|max:100',
            'weight' => 'required|numeric',
            'description' => 'required',
        ]);

        // Discount
        if($formFields['discount']) {
            $reduce = $formFields['amount'] / 100 * $formFields['discount'];
            $formFields['promo_price'] = $formFields['amount'] - $reduce;
        }

        Product::create($formFields);

        return redirect()->route('admin.product')->with('success', 'Product added successfully');

    }

    public function destroy($id){

        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
    }






}
