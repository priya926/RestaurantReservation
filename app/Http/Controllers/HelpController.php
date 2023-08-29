<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\helps;

class HelpController extends Controller
{
    function addHelp(Request $req)
    {
        $help= new helps;
        $help->question=$req->question;
        $help->save();
        return redirect('helps');
    }
}
