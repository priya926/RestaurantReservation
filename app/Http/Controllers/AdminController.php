<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admins;
use Hash;
use Session;
use DB;

class AdminController extends Controller
{
    public function adata(Request $req){

        $admin=new admins;
        $req->validate([
            'name'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $admin = admins::where('name','=',$req->name)->first();
        if($admin){
            if(Hash::check($req->password,$admin->password)){
                echo "inside if";
                exit;
                $req->Session()->put('loginID',$admin->id);
                return view('admindashboard');
            }else{
                return view('admindashboard');
                // return back()->with('fail','Password does not matches!'); 
            }
        }else{
            return back()->with('fail','Username Invalid!');
        }
    }
    public function aget()
    {
        $data=array();
        if(Session::has('loginID')){
            $data = admins::where('id','=',Session::get('loginID'))->first();
        }
        return view('admindashboard',compact('data'));
    }
    public function viewRestro()
    {
        $rdetails=DB::table('users')->get();
        return view('view_restro',compact('rdetails'));
    }
    public function viewUser()
    {
        $udetails=DB::table('uregistrations')->get();
        return view('view_user',compact('udetails'));
    }
    public function deleteUser($id)
    {
        DB::table('uregistrations')->where('id',$id)->delete();
        return back()->with('user_delete','User Deleted Successfully!');
    }
    public function deleteRestro($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return back()->with('restro_delete','Restaurant Deleted Successfully!');
    }
    
}
