<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
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
            // Get the uploaded file
            $image = $request->file('image');
            //
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $thumbnailFilename = 'thumbnail_' . $filename;

            // Save the original image

            // Create and save the thumbnail
            $thumbnail = Image::make($image)->fit(100, 100);
            $image->move('uploads/category/', $filename);
            $thumbnail->save('uploads/category/thumbnail/' . $thumbnailFilename);

            // Set the image and thumbnail filenames in the category model
            $category->image = $filename;
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
            // Get the uploaded file
            $image = $request->file('image');
            //
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $thumbnailFilename = 'thumbnail_' . $filename;
            $image405x255FileName = '405x255' . $filename;
            // Save the original image

            // Create and save the thumbnail
            $thumbnail = Image::make($image)->fit(100, 100);
            $image405x255 = Image::make($image)->fit(405, 255);
            $image->move('uploads/category/', $filename);
            $thumbnail->save('uploads/category/thumbnail/' . $thumbnailFilename);
            $image405x255->save('uploads/category/resized/' . $image405x255FileName);


            // Set the image and thumbnail filenames in the category model
            $category->image = $filename;
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
