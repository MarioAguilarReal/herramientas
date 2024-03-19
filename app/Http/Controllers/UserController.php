<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function all()
    {
        $users = User::all();
        return view('users.all', compact('users'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'shift' => 'required',
        ]);

        $imageName = time().$request->name.'.'.$request->photo->extension();
        $request->photo->move(public_path('profilePictures'), $imageName);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->photo = $imageName;
        $user->shift = $request->shift;
        $user->save();
        return redirect('/');
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::findOrFail($id);
        if($user->photo !== null){
            unlink(public_path('profilePictures/'.$user->photo));
        }

        if($request->photo != null){
            $imageName = time().$request->name.'.'.$request->photo->extension();
            $request->photo->move(public_path('profilePictures'), $imageName);
            $user->photo = $imageName;
        }

        $user->name = $request->name;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->shift = $request->shift;
        $user->save();
        return redirect()->route('users');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users');
    }


}
