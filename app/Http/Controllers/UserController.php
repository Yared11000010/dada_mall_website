<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allusers=User::all();

        return view('User.allluser',compact('allusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
             'name'=>'required',
             'email'=>'required',
             'role'=>'required',
             'image'=>'required',
             'password'=>'required|min:8'
        ]);

        $user = new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->role=$request->input('role');

        if($request->hasFile('image')){
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



        $user->status=0;
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('/users')->with('success', 'User Saved successfully!!');
    }

    public function active_user($id){

        $user=User::find($id);
        $user->status=1;
        $user->update();

        return redirect()->back();
    }


    public function inactive_user($id){

        $user=user::find($id);
        $user->status=0;
        $user->update();

       return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user=User::find($id);
        return view('User.edituser',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
       ]);

       $user=User::find($id);
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->role=$request->input('role');

       if($request->hasFile('image')){
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
       $user->save();

       return redirect('/users')->with('success', 'User Updated successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $detination=$user->image;
        if(File::exists($detination)){
            File::delete($detination);
        }
        $user->delete();

        return redirect()->route('users.index')->with('error', 'User deleted successfully.');
    }

    public function changePassword(Request $request)
    {
        return view('User.changepassword');
    }

    public function changePasswordSave(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

        if (!Hash::check($request->get('current_password'), $auth->password))
        {
            return back()->with('error', "Current Password is Invalid");
        }

        if (strcmp($request->get('current_password'), $request->new_password) == 0)
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
}
