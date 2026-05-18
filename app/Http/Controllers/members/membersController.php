<?php

namespace App\Http\Controllers\members;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class membersController extends Controller
{

    function index(){

        $users = User::select('id','name','email','role')->oldest()->get();

        return view('members.app',compact('users'));

    }

}
