<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class ContactController extends Controller
{
    function addContact(Request $req)
    {
        
        $cont= new contacts;
        $cont->name=$req->name;
        $cont->email=$req->email;
        $cont->subject=$req->subject;
        $cont->message=$req->message;
        $cont->save();
        return redirect('contactf')->with('Status','FORM SUBMITTED');

    }
}
