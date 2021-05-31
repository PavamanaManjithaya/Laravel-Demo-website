<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messege;
use Illuminate\Support\Facades\DB;

class MessegeController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);


        //create new messege
     $messege=new Messege;
     $messege->name=$request->input('name');
     $messege->email=$request->input('email');
     $messege->messege=$request->input('messege');

//save messege
$messege->save();

//redirect
return redirect('/')->with('success','Messege Sent');
    }
    
    public function getMesseges(){
        $messeges=Messege::all();
        //$messeges=DB::select('select * from messeges');;
       
        return view('messeges')->with('messeges',$messeges);

    }
}

