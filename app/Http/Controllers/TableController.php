<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tables;
use Auth;

class TableController extends Controller
{
    function addData(Request $req)
    {
        $tab=new tables();
        $tab->name=$req->name;
        $tab->email=$req->email;
        $tab->contact=$req->contact;
        $tab->date=$req->date;
        $tab->time=$req->time;
        $tab->person=$req->person;
        $tab->save(); 
        return back();
    }
}
