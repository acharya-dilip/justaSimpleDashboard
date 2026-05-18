<?php

namespace App\Http\Controllers\members;

use App\Http\Controllers\Controller;
use App\Models\member;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class membersController extends Controller
{

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'number' => 'required',
            'techStack' => 'required',
            'image' => 'required',
        ]);

        $member = new member;

        $member->name = $validate['name'];
        $member->email = $validate['email'];
        $member->password = $validate['password'];
        $member->dob = $validate['dob'];
        $member->techStack = $validate['techStack'];
        $member->number = $validate['number'];



        $member->image_path = $request->file('image')->store('uploads', 'public');

        $member->save();

    }

    function index(){

        $users = member::select('id','name','email','role')->oldest()->get();

        return view('members.app',compact('users'));

    }

}
