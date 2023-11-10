
<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('order') }}
            
        </h2>
      
        </div>

    </x-slot>
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">status</th>
                <th class="py-2 px-4 border-b">customer</th>
                <th class="py-2 px-4 border-b">Total Price</th>
                <th class="py-2 px-4 border-b">Actions</th>
           
            </tr>
        </thead>
        <tbody>
    @foreach ($orders as $order)
    <tr class="hover:bg-gray-100">
        <td class="py-2 px-4 border-b">{{$order->id}}</td>
        <td class="py-2 px-4 border-b">{{$order->name}}</td>
        <td class="py-2 px-4 border-b">{{$order->email}}</td>
        <td class="py-2 px-4 border-b">{{($order->getRole($order->role_as));}}</td>
        <td class="py-2 px-4 border-b"><img src="{{asset('uploads/order/'.$order->image);}}"class="w-10 h-10 object-cover rounded-full"></td>
        <td class="py-2 px-4 border-b flex">
            <a href="order/edit/{{$order->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Update</a>
           
        <form action="{{route('delete.order', $order->id)}}" method="post">
        @csrf
      
            <input type="hidden" name="id" value="{{$order->id}}">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
        </form>
        
        </td>
    </tr>
@endforeach
</tbody>
</table>



    
</x-app-layout>
