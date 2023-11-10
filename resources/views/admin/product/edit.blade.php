<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update product') }}
            
        </h2>
        <a href="{{url('admin/product')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
     Back
        </a>
        </div>

    </x-slot>
    <div class="bg-gray-100">
        <div class="bg-teal-200 p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Your Form</h2>
    
            <form action="{{ url('admin/product/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{$product->id}}
                <input type="hidden" name="id" value="{{$product->id}}"/>
                <!-- Title -->
                <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="title" class="block text-sm font-medium text-gray-600 mb-2">Title</label>
                    <input type="text" value="{{$product->title}}" name="title" id="title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
    
                <!-- Slug -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="slug" class="block text-sm font-medium text-gray-600 mb-2">Slug</label>
                    <input type="text" value="{{$product->slug}}" name="slug" id="slug" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
    
                 <!-- Category (Assuming a select dropdown) -->
                 <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="category_id" class="block text-sm font-medium text-gray-600 mb-2">Category</label>
                    <select name="category_id" id="category_id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        <!-- Populate this with category options from your database -->
                        <option>----Categories----</option>
                        <?php foreach($categories as $category) :?>
                        <option value="{{$category->id}}" {{($category->id == $product->category_id) ? 'selected': ''}}>{{$category->title}}</option>
                        <?php endforeach;?>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                  <!-- Price -->
                  <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="price" class="block text-sm font-medium text-gray-600 mb-2">Price</label>
                    <input type="number" value={{$product->price}} name="price" id="price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
    
               
     <!-- Meta Keyword -->
     <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
        <label for="meta_keyword" class="block text-sm font-medium text-gray-600 mb-2">Meta Keyword</label>
        <input type="text" value="{{$product->meta_keyword}}" name="meta_keyword" id="meta_keyword" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>
                <!-- Meta Title -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="meta_title" class="block text-sm font-medium text-gray-600 mb-2">Meta Title</label>
                    <input type="text" value="{{$product->meta_title}}" name="meta_title" id="meta_title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
      <!-- Status Checkbox -->
     <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8 mb-4 flex items-center">
      <input type="checkbox" {{($product->status == '1') ? 'checked' : ''}} name="status" id="status" class="mr-2">
      <label for="status"  class="text-sm font-medium text-gray-600">Status</label>
  </div>

    
                <!-- Meta Description -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="meta_description" class="block text-sm font-medium text-gray-600 mb-2">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{ trim($product->meta_description) }}</textarea>
                </div>
                   <!-- Description -->
                   <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="description" class="block text-sm font-medium text-gray-600 mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{ trim($product->description) }}</textarea>
                </div>
    
    
                <!-- Image -->
                <div class="w-full sm:w-1/2 lg:w-full px-4 mb-8">
                  <label for="image" class="block text-sm font-medium text-gray-600 mb-2">Image</label>
                  <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
              </div>
            
    
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Update Product</button>
                </div>
                </div>
            </form>
        </div>
    </div> 
   
    {{-- <div class="bg-gray-100  flex items-center justify-center">
    <div class="bg-teal-500 p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Your Form</h2>

        <form action="{{url('admin/product/update')}}" enctype="multipart/form-data" method="POST" class="mb-2">
            @csrf
            <!-- Name Input -->
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" value="{{$product->title}}" id="title" name="title" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="slug"  class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
                <input type="text" value="{{$product->slug}}" id="slug" name="slug" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea value="{{$product->description}}" id="description" name="description" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300"  required>
                    {{$product->description}}
                </textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" >
            </div>
            <div class="mb-4">
                <input type="checkbox" {{$product->status == 1 ? 'checked': ''; }}  name="status" id="exampleCheckbox" class="form-checkbox h-5 w-5 text-blue-600">
                <label for="exampleCheckbox" class="ml-2 text-gray-700">Check me</label>           
             </div>
            <div class="mb-4">
                <label for="meta_title" class="block text-gray-700 text-sm font-bold mb-2">Meta title</label>
                <input type="text" value="{{$product->meta_title}}" id="meta_title" name="meta_title" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="meta_keyword" class="block text-gray-700 text-sm font-bold mb-2">Meta Keyword</label>
                <input type="text"  value="{{$product->meta_keyword}}" id="meta_keyword" name="meta_keyword" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="meta_description" class="block text-gray-700 text-sm font-bold mb-2">Meta Description</label>
                <input type="text" value="{{$product->meta_description}}" id="meta_description" name="meta_description" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Submit
            </button>
        </form>
    </div>
</div> --}}
    
</x-app-layout>
