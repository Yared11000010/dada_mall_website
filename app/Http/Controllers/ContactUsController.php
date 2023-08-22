<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\question;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function questions(){

        return view('home');
    }

    public function store_question(Request $request){

        // dd($request->all());
        $question=new question();
        $question->question=$request->input('question');
        $question->save();
        return redirect('/question')->with('success', 'Your questions send successfully!');

    }
    public function index(){
        $allcontact=ContactUs::all();
        return view('contact.allcontact',compact('allcontact'));
    }
    public function store(Request $request){

        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
       ]);
    //    dd($request->all());

       $contact = new ContactUs();
       $contact->firstname=$request->input('firstName');
       $contact->lastname=$request->input('lastName');
       $contact->email=$request->input('email');
       $contact->phone=$request->input('phone');
       $contact->message=$request->input('message');
       $contact->save();

      return redirect('/')->with('success', 'successfully sent your message');
    }

    public function destory($id){
        $contact=ContactUs::find($id);
        $contact->delete();
        return redirect('/contact_us')->with('error', 'Contact_Us Deleted!');

    }
}
