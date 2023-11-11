<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {


        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(ProductFormRequest $request)
    {

        $validatedData = $request->validated();

        $product = new product;
        $product->title = $validatedData['title'];
        $product->slug = Str::slug($validatedData['slug']);
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->category_id = $validatedData['category_id'];
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            //
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $thumbnailFilename = 'thumbnail_' . $filename;

            // Save the original image

            // Create and save the thumbnail
            $thumbnail = Image::make($image)->fit(100, 100);
            $image->move('uploads/product/', $filename);
            $thumbnail->save('uploads/product/thumbnail/' . $thumbnailFilename);

            // Set the image and thumbnail filenames in the product model
            $product->image = $filename;
        }
        $product->meta_title = $validatedData['meta_title'];
        $product->meta_keyword = $validatedData['meta_keyword'];
        $product->meta_description = $validatedData['meta_description'];
        $product->status = $request->status == true ? '1' : '0';

        $product->save();


        return redirect('admin/product')->with('message', 'product Added Successfully');
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = (new Product)->find($id);


        return view('admin.product.edit', compact('product', 'categories'));
    }
    public function update(ProductFormRequest $request)
    {

        $id = $request['id'];


        $validatedData = $request->validated();
        $product = Product::find($id);

        $product->title = $validatedData['title'];
        $product->slug = Str::slug($validatedData['slug']);
        $product->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            //
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $thumbnailFilename = 'thumbnail_' . $filename;

            // Save the original image

            // Create and save the thumbnail
            $thumbnail = Image::make($image)->fit(100, 100);
            $image->move('uploads/product/', $filename);
            $thumbnail->save('uploads/product/thumbnail/' . $thumbnailFilename);

            // Set the image and thumbnail filenames in the product model
            $product->image = $filename;
        }
        $product->meta_title = $validatedData['meta_title'];
        $product->meta_keyword = $validatedData['meta_keyword'];
        $product->meta_description = $validatedData['meta_description'];
        $product->status = $request->status == true ? '1' : '0';
        $product->save();
        return redirect('/admin/product')->with('message', 'Your Record Updated Successfully');
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        product::find($id)->delete();
        return redirect('/admin/product')->with('message', 'Record Deleted Successfully');
    }
}
