<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('advertisement.allladvertisement', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('advertisement.addadvertisement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
       ]);

       // dd($request->all());
       $advertisement = new advertisement();
       $advertisement->title=$request->input('title');
       $advertisement->description=$request->input('description');

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
           $path=$request->file('image')->storeAs('public/advertisements',$fileNameToStore);

           $advertisement->image=$fileNameToStore;
          }

       $advertisement->save();

       return redirect('/advertisements')->with('success', 'Advertisement created successfully.');


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
          $advertisement=Advertisement::find($id);
          return view('advertisement.editadvertisement', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
       ]);

       // dd($request->all());
       $advertisement = advertisement::find($id);
       $advertisement->title=$request->input('title');
       $advertisement->description=$request->input('description');

       if($request->hasFile('image')){
        Storage::disk('public')->delete('advertisements/'.$advertisement->image);

           //get file name with ext
           $fileNameWithExt=$request->file('image')->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$request->file('image')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$fileName.'_'.time().'.'.$extension;
           //upload image
           $path=$request->file('image')->storeAs('public/advertisements',$fileNameToStore);

           $advertisement->image=$fileNameToStore;
          }

       $advertisement->save();

       return redirect('/advertisements')->with('success', 'Advertisement Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertisement=Advertisement::find($id);
        Storage::disk('public')->delete('advertisements/'.$advertisement->image);
        $advertisement->delete();

    return redirect()->route('advertisements.index')
                     ->with('success', 'Advertisement deleted successfully.');
    }
}
