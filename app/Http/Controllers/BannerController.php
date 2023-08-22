<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $banner=banner::all();

      return view('banner.allbanner',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('banner.addbanner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Example image validation
       ]);

       // dd($request->all());
       $banner = new banner();
       $banner->title=$request->input('title');
       $banner->description=$request->input('description');

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

           $banner->image=$fileNameToStore;
          }

       $banner->save();

       return redirect('/banners')->with('success', 'Banner Added  successfully!');

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
        $banner=banner::find($id);
        return view('banner.editbanner',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Example image validation
       ]);

       // dd($request->all());
       $banner = banner::find($id);
       $banner->title=$request->input('title');
       $banner->description=$request->input('description');

       if($request->hasFile('image')){
           Storage::disk('public')->delete('banner/'.$banner->image);
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

           $banner->image=$fileNameToStore;
          }

       $banner->save();

       return redirect('/banners')->with('success', 'Banner Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = banner::find($id);
        Storage::disk('public')->delete('banner/'.$blog->image);
        Storage::disk('public')->delete('banner/'.$blog->video);
        $blog->delete();

        return redirect()->route('banners.index')->with('error', 'Banner deleted successfully.');
    }
}
