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

    }

    function index(){

        $users = member::select('id','name','email','role')->oldest()->get();

        return view('members.app',compact('users'));

    }

}
