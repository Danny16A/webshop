<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::latest()->paginate(3);

        return view('admin.category.category', compact('data'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function create()
    {
        return view('admin.category.categoryCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('admin.category')->with('success', 'Category created success.');
    }

    public function show(Category $category)
    {
    }

    public function edit($id)
    {
        $category = Category::Find($id);

        return view('admin.category.categoryEdit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([]);
    }

    public function destroy($id)
    {

        $category = Category::Find($id);
        $category->delete();

        return redirect()->route('admin.category')->with('success', 'Category deleted success');
    }
}
