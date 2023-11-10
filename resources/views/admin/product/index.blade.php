<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
            
        </h2>
        <a href="{{url('admin/product/create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       Add product
        </a>
        </div>

    </x-slot>
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Category</th>
                <th class="py-2 px-4 border-b">Status</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Image</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($products as $product)
    <tr class="hover:bg-gray-100">
        <td class="py-2 px-4 border-b">{{$product->id}}</td>
        <td class="py-2 px-4 border-b">{{$product->title}}</td>
        <td class="py-2 px-4 border-b">{{$product->category->title}}</td>
        <td class="py-2 px-4 border-b">{{$product->status}}</td>
        <td class="py-2 px-4 border-b">{{$product->description}}</td>
        <td class="py-2 px-4 border-b"><img src="{{asset('uploads/product/'.$product->image);}}" alt="{{$product->meta_keyword}}" class="w-10 h-10 object-cover rounded-full"></td>
        <td class="py-2 px-4 border-b">
            <a href="product/edit/{{$product->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Update</a>
           
        <form action="{{route('delete.product', $product->id)}}" method="post">
        @csrf
      
            <input type="hidden" name="id" value="{{$product->id}}">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
        </form>
        
        </td>
    </tr>
@endforeach
</tbody>
</table>



    
</x-app-layout>
