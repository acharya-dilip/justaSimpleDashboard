<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;

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

        $post = new post;

        $post['description']->storeAs($validate['description']);
        $post['image_path']->storeAs($filename);

        return redirect(route('dashboard'));

    }


}
