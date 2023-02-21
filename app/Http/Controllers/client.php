<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function login(Request $request){
        // dd("yeesss");
    $client = Client::where('business_name',$request->client_name)->first();
    $categories = DB::table('categories')->where('client_id',$client->id)->get();

    $pass = $request->pass1 . $request->pass2 . $request->pass3 .$request->pass4;


    if($pass == $client->passcode){
        session(['business_name' => $client->business_name]);
        session()->put('business_id', $client->id);
        
        // return view('services',compact('categories'));
        return response()->json([
            'html' => view('services', compact('categories'))->render()
        ]);

         //return redirect()->route('services')->with('status','client login successfully');
         //return view('services')->with('status','client login successfully');
        // array('client_id' => $client->id, 'customer_id' => 0)
                  


    }else{
        return response()->json([
            "message"=>"Passcode is invalid",
            "type"=>"error"
        ]);
        // session()->flash('error','Passcode is invalid');
        // return redirect()->back();
    }

        
    }
}
