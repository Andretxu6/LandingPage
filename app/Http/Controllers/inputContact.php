<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class inputContact extends Controller
{
    public function inputData(Request $request){
        $request->validate([
            'email' => 'required_without:phone',
            'phone' => 'numeric',
            'text' => 'required',
        ]);

        $row = new Contact;
        $row->email=$_POST['email'];
        $row->phone=$_POST['phone'];
        $row->message=$_POST['text'];
        $row->save();

        session_start();
        $_SESSION["success"] = "success";

        return(redirect('/'));

    }
}
