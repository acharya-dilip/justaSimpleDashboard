<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{

    public function create(Request $request){

        $validate = request()->validate([
            'description' => 'required',
        ]);

        $post = new post;

        $post->description = $validate['description'];

        if($request->hasFile('image')){

            $post->image_path = $request->file('image')->store('uploads', 'public');

        }

        $post->save(); //dont forget this is actually performs the operation


        return redirect(route('dashboard'));

    }

    public function index(){

        $posts = Post::latest()->get();

        return view('dashboard.app', compact('posts'));
    }



}
