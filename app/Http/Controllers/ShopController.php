<?php

namespace App\Http\Controllers;

use App\Models\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allshops=shop::all()->where('status',1);

        return view('shop.allshops',compact('allshops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('shop.addshop');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'room_number'=>'required',
             'phone'=>'required',
            'floor'=>'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
       ]);

    //    dd($request->all());

       $shop = new shop();
       $shop->name=$request->input('name');
       $shop->room_number=$request->input('room_number');
       $shop->floor=$request->input('floor');
       $shop->phone=$request->input('phone');
       $shop->description=$request->input('description');

       if($request->hasFile('image')){
        foreach ($request->file('image') as $image) {
           //get file name with ext
           $fileNameWithExt=$image->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$image->getClientOriginalExtension();
           //file name to store
           $fileNameToStore[]=$fileName.'_'.time().'.'.$extension;
           //upload image
           $images = json_encode($fileNameToStore);

           $path=$image->storeAs('public/shops',$fileNameToStore);

           $shop->image=$images;
          }
        }

       $shop->save();

       return redirect('/shops')->with('success', 'Shop saved successfully!');

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
        $shops=shop::find($id);
        return view('shop.editshop',compact('shops'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'room_number'=>'required',
             'phone'=>'required',
            'floor'=>'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
       ]);

    //    dd($request->all());

       $shop = shop::find($id);
       $shop->name=$request->input('name');
       $shop->room_number=$request->input('room_number');
       $shop->floor=$request->input('floor');
       $shop->phone=$request->input('phone');
       $shop->description=$request->input('description');

       if($request->hasFile('image')){
        foreach ($request->file('image') as $image) {
            Storage::disk('public')->delete('shops/'.$shop->image);
           //get file name with ext
           $fileNameWithExt=$image->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$image->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$fileName.'_'.time().'.'.$extension;
           //upload image
           $path=$image->storeAs('public/shops',$fileNameToStore);

           $shop->image=$fileNameToStore;
          }
        }

       $shop->save();

       return redirect('/shops')->with('success', 'shop Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $shops=shop::find($id);
        foreach( json_decode($shops->image ) as $image){
            
        Storage::disk('public')->delete('shops/'.$image);
        }
        $shops->delete();

        return redirect('/shops')->with('error', 'shop Updated successfully!');
    }
}
