<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {

        $validatedData = $request->validated();

        $category = new Category;
        $category->title = $validatedData['title'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $category->image = $filename;
            $file->move('uploads/category/', $filename);
        }
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();


        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }
    public function edit($id)
    {

        $category = (new Category)->find($id);

        return view('admin.category.edit', compact('category'));
    }
    public function update(CategoryFormRequest $request)
    {
        $id = $request['id'];
        $validatedData = $request->validated();
        $category = Category::find($id);

        $category->title = $validatedData['title'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $category->image = $filename;
            $file->move('uploads/category/', $filename);
        }
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();
        return redirect('/admin/category')->with('message', 'Your Record Updated Successfully');
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        Category::find($id)->delete();
        return redirect('/admin/category')->with('message', 'Record Deleted Successfully');
    }
}
