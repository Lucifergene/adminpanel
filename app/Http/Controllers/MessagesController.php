<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'vendor_name' => 'required',
            'pan_no' => 'required',
            'address_2' => 'required',
            'city' => 'required',
            'country' => 'required',
            'gst_no' => 'required',
            'address_1' => 'required',
            'pincode' => 'required',
            'state' => 'required'

          ]);

          $message = new Message;
          $message->vendor_name =  $request->input('vendor_name');
          $message->gst_no =  $request->input('gst_no');
          $message->pan_no =  $request->input('pan_no');
          $message->address_1 =  $request->input('address_1');
          $message->address_2 =  $request->input('address_2');
          $message->pincode =  $request->input('pincode');
          $message->city =  $request->input('city');
          $message->state =  $request->input('state');
          $message->country =  $request->input('country');


          $message->save();


          return redirect('/');

    }

    public function getMessages(){
        $messages = Message::all();

        return view('Vendors')->with('messages',$messages);
    }
}

