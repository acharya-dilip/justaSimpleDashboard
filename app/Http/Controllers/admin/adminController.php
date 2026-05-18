<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\member;

class adminController extends Controller
{

    function index(){

        $members = member::latest()->get();

        return view('admin.app',compact('members'));

    }



}
