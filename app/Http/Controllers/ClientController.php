<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Models\Client;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function login(Request $req){

    $client = Client::where('business_name',$req->username)->first();

    $pass = $req->pass1 . $req->pass2 . $req->pass3 .$req->pass4;


    if($pass == $client->passcode){
        session(['business_name' => $client->business_name]);
        session()->put('business_id', $client->id);
       

         return redirect()->route('services',  array('customer_id' => 0) )->with('status','client login successfully');
        // return view('services',compact('client'))->with('status','client login successfully');
                  


    }else{
        session()->flash('error','Passcode is invalid');
        return redirect()->back();
    }

        
    }
}
