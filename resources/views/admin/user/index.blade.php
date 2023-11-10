<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
            
        </h2>
        <a href="{{url('admin/user/create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       Add User
        </a>
        </div>

    </x-slot>
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Role</th>
                <th class="py-2 px-4 border-b">Image</th>
                <th class="py-2 px-4 border-b">Actions</th>
           
            </tr>
        </thead>
        <tbody>
    @foreach ($users as $user)
    <tr class="hover:bg-gray-100">
        <td class="py-2 px-4 border-b">{{$user->id}}</td>
        <td class="py-2 px-4 border-b">{{$user->name}}</td>
        <td class="py-2 px-4 border-b">{{$user->email}}</td>
        <td class="py-2 px-4 border-b">{{($user->getRole($user->role_as));}}</td>
        <td class="py-2 px-4 border-b"><img src="{{asset('uploads/user/'.$user->image);}}"class="w-10 h-10 object-cover rounded-full"></td>
        <td class="py-2 px-4 border-b flex">
            <a href="user/edit/{{$user->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Update</a>
           
        <form action="{{route('delete.user', $user->id)}}" method="post">
        @csrf
      
            <input type="hidden" name="id" value="{{$user->id}}">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
        </form>
        
        </td>
    </tr>
@endforeach
</tbody>
</table>



    
</x-app-layout>
