<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allblogs=blog::all();

        return view('blog.alllblogs',compact('allblogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.addblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
             'title'=>'required',
             'description'=>'required',
             'image'=>'required',
             'video'=>'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20480',
        ]);

        // dd($request->all());
        $blog = new blog();
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');

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
            $path=$request->file('image')->storeAs('public/blogs',$fileNameToStore);

            $blog->image=$fileNameToStore;
           }

           if($request->hasFile('video')){
            //get file name with ext
            $fileNameWithExt=$request->file('video')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('video')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload video
            $path=$request->file('video')->storeAs('public/blogs',$fileNameToStore);

            $blog->video=$fileNameToStore;
           }
        $blog->status=0;
        $blog->save();

        return redirect('/blogs')->with('success', 'News Added  successfully!');

    }

    public function active_blog($id){

        $blog=blog::find($id);
        $blog->status=1;
        $blog->update();

        return redirect()->back();
    }


    public function inactive_blog($id){

        $blog=blog::find($id);
        $blog->status=0;
        $blog->update();

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
        $blog=blog::find($id);
        return view('blog.editblog',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
            'video'=>'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20480',
       ]);

       // dd($request->all());
       $blog = blog::find($id);
       $blog->title=$request->input('title');
       $blog->description=$request->input('description');

       if($request->hasFile('image')){
           Storage::disk('public')->delete('blogs/'.$blog->image);
           //get file name with ext
           $fileNameWithExt=$request->file('image')->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$request->file('image')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$fileName.'_'.time().'.'.$extension;
           //upload image
           $path=$request->file('image')->storeAs('public/blogs',$fileNameToStore);

           $blog->image=$fileNameToStore;
          }

          if($request->hasFile('video')){
            Storage::disk('public')->delete('blogs/'.$blog->video);
            //get file name with ext
           $fileNameWithExt=$request->file('video')->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$request->file('video')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$fileName.'_'.time().'.'.$extension;
           //upload video
           $path=$request->file('video')->storeAs('public/blogs',$fileNameToStore);

           $blog->video=$fileNameToStore;
          }
       $blog->save();

       return redirect('/blogs')->with('success', 'News Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = blog::find($id);
        Storage::disk('public')->delete('blogs/'.$blog->image);
        Storage::disk('public')->delete('blogs/'.$blog->video);
        $blog->delete();

        return redirect()->route('blogs.index')->with('error', 'News Deleted successfully.');
    }
}
