<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\member;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    function index(){

        $members = member::latest()->get();

        return view('admin.app',compact('members'));

    }

    function update(Request $request){

        $id = $request->id;

        $member = member::find($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = $request->password;
        $member->image = $request->image;
        $member->techStack = $request->techStack;
        $member->number = $request->number;
        $member->dob = $request->dob;
        $member->role = $request->role;
        $member->save();


        if(User::find($id)==null){
            if($member->role != NULL ){
                $user = new User();
                $user->id=$request->id;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->role = $request->role;
                $user->password = $request->password;
                $user->save();
            }

        }elseif(User::find($id) != NULL ){
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = $request->password;
            $user->save();
        }

        return redirect(route('admin.index'));

    }



}
