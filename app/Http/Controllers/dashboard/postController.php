<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

class postController extends Controller
{

    public function create(Request $request){

        $validate = request()->validate([
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
               $filename =  time() .'.'. $request->file('image')->getClientOriginalExtension();
               $request->file('image')->storeAs('public/uploads', $filename);
        }



    }


}
