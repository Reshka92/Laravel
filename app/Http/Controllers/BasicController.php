<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Message;

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

    return redirect()->route('home');
    }
    
}
