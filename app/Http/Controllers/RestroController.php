<?php

namespace App\Http\Controllers;
use App\Models\Restrodetail;
use App\Models\User;
use App\Models\tables;
use DB;
use Auth;

use Illuminate\Http\Request;

class RestroController extends Controller
{
    public function addData(){
        return view ('restro_details');
    }
    public function saveData(Request $req)
    {
        $req->validate([
            'restro_facilities'=>'required'
        ]);
        $rdetail=new Restrodetail();
        $rdetail->restro_id=Auth::user()->id;
        $rdetail->name=$req->name;
        $rdetail->contact=$req->contact;
        $rdetail->email=$req->email;
        $rdetail->address=$req->address;
        $rdetail->cost_per_two=$req->cost_per_two;
        $rdetail->cuisine=$req->cuisine;
        $rdetail->otime=$req->otime;
        $rdetail->ctime=$req->ctime;
        $rdetail->wotime=$req->wotime;
        $rdetail->wctime=$req->wctime;
        $rdetail->description=$req->description;
        $rdetail->must_try=$req->must_try;
        $rdetail->select=$req->select;
        $rdetail->offer=$req->offer;
        $rdetail->restro_facilities=json_encode($req->restro_facilities);

        if($req->hasfile('tp'))
        {
            $file=$req->file('tp');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/table_image/',$filename);
            $rdetail->tp=$filename;
        }
        if($req->hasfile('iep'))
        {
            $file=$req->file('iep');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/ie_image/',$filename);
            $rdetail->iep=$filename;
        }
        if($req->hasfile('mp'))
        {
            $file=$req->file('mp');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/menu_image/',$filename);
            $rdetail->mp=$filename;
        }
        $rdetail->save();
        return back()->with('data_add','Restro Details added Succcessfully!');
    }
    // public function show(Restrodetail $rdetail){
    //     $rdetail=Restrodetail::all();
    //     return view('blog',['restrodetails'=>$rdetail]);
    // }
    public function restroList()
    {
        $rdetails=DB::table('restrodetails')->get();
        return view('restrolist',compact('rdetails'));
    }
    public function restroShow()
    {
        $rdetails=DB::table('restrodetails')->get();
        return view('blog',compact('rdetails'));
    }

    public function restrooShow($id){
        $rdata=Restrodetail::where('restro_id',$id)->first();
        return view('restroupdate',['restrodetails'=>$rdata]);
    }

    public function update(Request $req,Restrodetail $rdata, $id){
        $rdata=Restrodetail::where('restro_id',$id)->first();
        $rdata->update($req->all());
        $result=$rdata->save();
        if($result){
            return back()->with('Your Restro details has been updated!');}
        else{
            return back()->with('Can not update Restro details!');
        }
    }

    public function indexShow($id){
        $idata=Restrodetail::where('restro_id',$id)->first();
        return view('index',['restrodetails'=>$idata]);
    }

    public function viewReserve()
    {
        $tdetails=DB::table('tables')->get();
        return view('view_reserve',compact('tdetails'));
    }
    // public function restrodash()
    // {
    //     $rdetails=DB::table('restrodetails')->get();
    //     return view('restaurant',compact('rdetails'));
    // }
    // public function editRestro($id)
    // {
    //     $rdetails=DB::table('restrodetails')->where('id',$id)->first();
    //     return view('restroupdate',compact('rdetails','id'));
    // }

    // public function restroUpdate(Request $req, $id){
        
    //     $req->validate([
    //         'restro_facilities'=>'required'
    //     ]);
    //     $rdetails=Restrodetail::find($id);
    //     $rdetails->name=$req->name;
    //     $rdetails->contact=$req->contact;
    //     $rdetails->email=$req->email;
    //     $rdetails->address=$req->address;
    //     $rdetails->cost_per_two=$req->cost_per_two;
    //     $rdetails->cuisine=$req->cuisine;
    //     $rdetails->otime=$req->otime;
    //     $rdetails->ctime=$req->ctime;
    //     $rdetails->wotime=$req->wotime;
    //     $rdetails->wctime=$req->wctime;
    //     $rdetails->description=$req->description;
    //     $rdetails->must_try=$req->must_try;
    //     $rdetails->select=$req->select;
    //     $rdetails->offer=$req->offer;
    //     $rdetails->restro_facilities=json_encode($req->restro_facilities);

    //     if($req->hasfile('tp'))
    //     {
    //         $file=$req->file('tp');
    //         $extension=$file->getClientOriginalExtension();
    //         $filename=time().".".$extension;
    //         $file->move('uploads/table_image/',$filename);
    //         $rdetails->tp=$filename;
    //     }
    //     if($req->hasfile('iep'))
    //     {
    //         $file=$req->file('iep');
    //         $extension=$file->getClientOriginalExtension();
    //         $filename=time().".".$extension;
    //         $file->move('uploads/ie_image/',$filename);
    //         $rdetails->iep=$filename;
    //     }
    //     if($req->hasfile('mp'))
    //     {
    //         $file=$req->file('mp');
    //         $extension=$file->getClientOriginalExtension();
    //         $filename=time().".".$extension;
    //         $file->move('uploads/menu_image/',$filename);
    //         $rdetails->mp=$filename;
    //     }
    //     $rdetails->save();
    //     return back()->with('restro_update','Restro Details Updated Successfully');
    // }
    // public function deleteRestro($id){
    //     DB::table('restrodetails')->where('id',$id)->delete();
    //     return back()->with('restro_delete','Restaurant deleted successfully!!');
    // }

    // public function index(){
    //     $restrodetails=Restrodetail::with('restro')->get();
    //     $users=User::with('restros')->get();
    //     return view('restrodash',compact('restrodetails','users'));
    // }
}
