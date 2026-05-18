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

    function update(Request $request, $id){

        $member = member::find($id);
        $member->update($request->all());

        if($member->role != NULL ){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = $request->password;
            $user->save();
        }


    }



}
