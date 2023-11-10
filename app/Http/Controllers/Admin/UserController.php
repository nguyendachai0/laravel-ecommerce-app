<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }
    public function create()
    {

        $user_roles = (new User)->getRoles();

        return view('admin.user.create', compact('user_roles'));
    }
    public function store(UserFormRequest $request)
    {
        $validatedData = $request->validated();

        $user = new User;
        $user->name = $validatedData['name'];

        $user->email = $validatedData['email'];
        $user->role_as = $validatedData['role_as'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $user->image = $filename;
            $file->move('uploads/user/', $filename);
        }
        $user->password = $validatedData['password'];

        $user->save();


        return redirect('admin/user')->with('message', 'user Added Successfully');
    }
    public function edit($id)
    {

        $user = (new User)->find($id);
        $user_roles = (new User)->getRoles();

        return view('admin.user.edit', compact('user', 'user_roles'));
    }
    public function update(UserFormRequest $request)
    {
        $id = $request['id'];
        $validatedData = $request->validated();
        $user = User::find($id);

        $user->name = $validatedData['name'];

        $user->email = $validatedData['email'];
        $user->role_as = $validatedData['role_as'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $user->image = $filename;
            $file->move('uploads/user/', $filename);
        }
        $user->password = $validatedData['password'];

        $user->save();


        return redirect('/admin/user')->with('message', 'Your Record Updated Successfully');
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        User::find($id)->delete();
        return redirect('/admin/user')->with('message', 'Record Deleted Successfully');
    }
}
