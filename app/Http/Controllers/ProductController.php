<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'main_category' => 'required|string',
            'sub_category_1' => 'required|string',
            'sub_category_2' => 'required|string',
            'listed_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'weight' => 'required|string',
            'quantity' => 'required|integer',
            'author' => 'required|string',
            'publisher_isbn' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ]);

        $product = new Product($request->except(['main_image', 'sub_image_1', 'sub_image_2', 'video']));

        if ($request->hasFile('main_image')) {
            $product->main_image = $request->file('main_image')->store('products', 'public');
        }
        if ($request->hasFile('sub_image_1')) {
            $product->sub_image_1 = $request->file('sub_image_1')->store('products', 'public');
        }
        if ($request->hasFile('sub_image_2')) {
            $product->sub_image_2 = $request->file('sub_image_2')->store('products', 'public');
        }
        if ($request->hasFile('video')) {
            $product->video = $request->file('video')->store('videos', 'public');
        }

        $product->save();

        return response()->json([
            'message' => 'Product added successfully!',
        ]);
    }


    public function list_product()
    {
        $products = Product::all();
        return view('admin.page-list-product', compact('products'));

    }

    public function edit_product($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page-update-product', compact('product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.list')->with('success', 'Product updated successfully!');
    }

    public function delete_product($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

}
