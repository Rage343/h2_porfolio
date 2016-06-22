<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ContactEvent;
use Illuminate\Support\Facades\Event;

class HomeController extends Controller
{
  public function getHome(){
    return view('home');
  }
  public function sendEmail(Request $request){

    //validation
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required'
    ]);

    $contact = [
      'name' => ucfirst($request['name']),
      'email' => $request['email'],
      'url' => $request['url'],
      'message' => $request['message']
    ];


    Event::fire(new ContactEvent($contact));

    return redirect()->route('home')->with([
      'success' => 'Message Send Thanks!'
    ]);
  }
}
