<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');// user can't create post unless authorized 
    }


    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        
        return view('posts.index', compact('posts'));
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

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();

            // get authenticated user and create post
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' => $imagePath,
            ]);

            return redirect('/profile/'. auth()->user()->id);
        }

        public function show(\App\Post $post)
        {
            return view('posts.show', compact('post'));
        }
}
