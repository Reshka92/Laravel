<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;

class BasicController extends Controller
{
    public function index()
    {
        return view('static.home');
    }
    public function about()
    {
        return view('static.about');
    }
    public function contact()
    {
        return view('static.contact');
    }
     public function submit(ContactRequest $request)
    {
    //$request->validate();
    $message = new Message();
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->subject = $request->input('subject');
    $message->text = $request->input('name');
    $message->save();

    Mail::to('kirillmatveev119@gmail.com')->send(new ContactMail($message));

    return redirect()->route('home');
    }
    
}
