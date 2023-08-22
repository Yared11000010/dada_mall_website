<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('User.detail', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            // Add more validation rules as needed
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request->hasFile('image')){
            Storage::disk('public')->delete('banner/'.$user->image);

            //get file name with ext
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('image')->storeAs('public/banner',$fileNameToStore);

            $user->image=$fileNameToStore;
           }
        // Update other profile fields here

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }

}
