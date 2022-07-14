<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 

class testController extends Controller
{
  
    public function create() { 

      return view('contact_form');

     }  

     public function store(Request $request) {
      Contact::create([
        'name' => $request->name,
        'query' => $request->query
      ]);
      
      return response()->json("its working");

    }

    // public function send_form(Request $request){
        
    //   \Log::info("here");
  
    //     return $response;
    // }
}
