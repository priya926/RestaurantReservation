<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uregistrations;
use Hash;
use Session;

class UregController extends Controller
{
    public function udata(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'contact'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $ureg=new uregistrations;
        $ureg->name=$req->name;
        $ureg->email=$req->email;
        $ureg->contact=$req->contact;
        $ureg->password=Hash::make($req->password);
        $res=$ureg->save();
        if($res){
            return back()->with('success','You have registered Successfully');
        }else{
            return back()->with('fail','Something wrong');
        }
    }
    public function uldata(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $ureg = uregistrations::where('email','=',$req->email)->first();
        if($ureg){
            if(Hash::check($req->password,$ureg->password)){
                $req->Session()->put('loginID',$ureg->id);
                return redirect('blog');
            }else{
                return back()->with('fail','Password does not matches!'); 
            }
        }else{
            return back()->with('fail','The email is not registered!');
        }
    }
    public function user()
    {
        $data=array();
        if(Session::has('loginID')){
            $data = uregistrations::where('id','=',Session::get('loginID'))->first();
        }
        return view('blog',compact('data'));
    }
}
