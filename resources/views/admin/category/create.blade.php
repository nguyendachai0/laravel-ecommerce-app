<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
            
        </h2>
        <a href="{{url('admin/category')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
     Back
        </a>
        </div>

    </x-slot>
    <div class="bg-gray-100  flex items-center justify-center">
    <div class="bg-teal-500 p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Your Form</h2>

        <form action="{{url('admin/category/create')}}" enctype="multipart/form-data" method="POST" class="mb-2">
            @csrf
            <!-- Name Input -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
                <input type="text" id="slug" name="slug" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea type="text" id="description" name="description" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <input type="checkbox"  name="status" id="exampleCheckbox" class="form-checkbox h-5 w-5 text-blue-600">
                <label for="exampleCheckbox" class="ml-2 text-gray-700">Check me</label>           
             </div>
            <div class="mb-4">
                <label for="meta_title" class="block text-gray-700 text-sm font-bold mb-2">Meta title</label>
                <input type="text" id="meta_title" name="meta_title" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="meta_keyword" class="block text-gray-700 text-sm font-bold mb-2">Meta Keyword</label>
                <input type="text" id="meta_keyword" name="meta_keyword" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="meta_description" class="block text-gray-700 text-sm font-bold mb-2">Meta Description</label>
                <input type="text" id="meta_description" name="meta_description" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Submit
            </button>
        </form>
    </div>
</div>
    
</x-app-layout>
