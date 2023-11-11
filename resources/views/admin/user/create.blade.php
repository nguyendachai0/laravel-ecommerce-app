<x-app-layout>
    <x-slot name="header">
        <div class="flex mb-4">
           
        
          
        <h2 class="w-1/2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add user') }}
            
        </h2>
        <a href="{{url('admin/user')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
     Back
        </a>
        </div>

    </x-slot>
     <div class="bg-gray-100">
        <div class="bg-teal-200 p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Your Form</h2>
    
            <form action="{{ url('admin/user/create') }}" method="POST" enctype="multipart/form-data">
                @csrf
             
                <!-- Name -->
                <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Name</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
    
                <!-- Email -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                {{-- Password --}}
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
    
                  {{-- AuthPassword --}}
                  <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600 mb-2">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                 <!-- user (Assuming a select dropdown) -->
                 <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Role</label>
                    <select name="role_as" id="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        <!-- Populate this with user options from your database -->
                        <option>----users----</option>
                        
                        <?php foreach($user_roles as $key=>$value) :?>
                        <option value="{{$key}}">{{$value}}</option>
                        <?php endforeach;?>
                        <!-- Add more options as needed -->
                    </select>
                </div>
               
                <!-- Image -->
                <div class="w-full sm:w-1/2 lg:w-full px-4 mb-8">
                  <label for="image" class="block text-sm font-medium text-gray-600 mb-2">Image</label>
                  <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
              </div>
            
    
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Update User</button>
                </div>
                </div>
            </form>
        </div>
    </div> 
   
  
    
</x-app-layout>
