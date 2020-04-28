<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\inform;
use App\regist;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {

        $registerant =  regist::all();
        return view('welcome',[
            'registerant' => $registerant
        ]);

    }
    public function about()
    {
        return view('about');
    }
    public function inform()
    {
        return view('inform');
    }
    public function register()
    {
        return view('register');
    }
    public function donate()
    {
        return view('donate');
    }
    public function pay(Request $request){
        $this->validate($request,[
            'name'=>'required| min:3 |max:30',
            'email'=>'required| email | max:50',
            'contact'=>'required| min:10|max:10',
            'description'=>'required|min:20|max:400',
            'amount'=>'required|min:2'
        ]);
        return view('pay');
    }
    public function cases()
    {
        $informer= inform::latest()->get();
        return view('cases',[
            'informer'=>$informer
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required| min:3 |max:30',
            'email'=>'required| email | max:50',
            'contact'=>'required| min:10|max:10',
            'address'=>'required | min:10 | max:100',
            'description'=>'required|min:20|max:400',
            'image'=>'image|mimes:jpeg,png,gif,svg|max:2048',

        ]);
        $inform= new inform();
        $inform->name= $request->input('name');
        $inform->email=$request->input('email');
        $inform->contact=$request->input('contact');
        $inform->address=$request->input('address');
        $inform->description=$request->input('description');

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'upload/';
            $originalFile = $file->getClientOriginalName();
            $filename = strtotime(date('Y-m-d-H:isa')) . $originalFile;
            $file->move($destinationPath, $filename);
            $inform->image = $originalFile;
        }
        $inform->save();
        return redirect('/inform')->with('message','Last Information submitted successfully...');
    }
    public function savetwo(Request $request){

        $regist= new regist();
        $regist->name= $request->input('name');
        $regist->email=$request->input('email');
        $regist->contact=$request->input('contact');
        $regist->address=$request->input('address');
        $regist->description=$request->input('description');
        $regist->opt=$request->input('opt');
        $regist->timeoften=$request->input('timeoften');
        $regist->save();

        $data=array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'contact'=>$request->input('contact'),
            'address'=>$request->input('address'),
            'about'=>$request->input('description'),
            'opt'=>$request->input('opt'),
            'time'=>$request->input('timeoften'),
        );

        Mail::to('laratest213@gmail.com')->send(new SendEmail($data));
        return redirect('/register')->with('message2','Last Registration was Successfull and details successfully sent via mail');
//        $registerant->tags()->attach($request->tags);

    }
}
