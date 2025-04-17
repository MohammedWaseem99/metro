<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index_categories() {
        $categories = Category::all();
        return view('admin.page-list-category', compact('categories'));
    }

    public function store_categories(Request $request) {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'sub_category2' => 'required',
            'code' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
        }

        Category::create([
            'image' => $imagePath,
            'name' => $request->name,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'sub_category2' => $request->sub_category2,
            'code' => $request->code
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
    }

    public function edit_categories($id) {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update_categories(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'sub_category2' => 'required',
            'code' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $category = Category::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
            $category->image = $imagePath;
        }

        $category->update($request->only(['name', 'category', 'sub_category', 'sub_category2', 'code']));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy_categories($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}
