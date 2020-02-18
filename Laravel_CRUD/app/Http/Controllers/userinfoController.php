<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userinfo;

class userinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userinfoSave(Request $request){
      $userinfo = New Userinfo();

      $userinfo->name =$request->name;
        $userinfo->email =$request->email;
        $userinfo->phone =$request->phone;
        $userinfo->address =$request->address;
        $userinfo->save();

        return redirect()->route('home');

    }
    public function userinfomanage(){
        $userinfos=userinfo::all();
        return view('frontEnd.manage',['userinfos'=>$userinfos]);
    }
   public function userinfodelete($id){
       $userinfo =userinfo::find($id);
       $userinfo->delete();
       return redirect()->route('manage');
   }
    public function userinfoedit($id){
        $userinfosByID =userinfo::where('id',$id)->first();

        return view('frontend.edit',['userinfosByID'=>$userinfosByID]);
    }
    public function userinfoupdate(Request $request){
        $userinfo =userinfo::find($request->id);

        $userinfo->name =$request->name;
        $userinfo->email =$request->email;
        $userinfo->phone =$request->phone;
        $userinfo->address =$request->address;
        $userinfo->save();

        return redirect()->route('manage');

    }
}
