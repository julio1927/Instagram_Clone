<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');// user can't create post unless authorized 
    }

    // creating post form 
    public function create()
    {
        return view('posts.create');
    }

        // post created post 
        public function store()
        {
            // validate data 
            $data = request()->validate([
                'caption' => 'required',
                'image' => 'required | image',
            ]);
            
            $imagePath = request('image')->store('uploads', 'public');

            // get authenticated user and create post
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' => $imagePath,
            ]);

            return redirect('/profile/'. auth()->user()->id);
        }
}
