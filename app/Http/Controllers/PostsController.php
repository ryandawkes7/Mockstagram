<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

// Controller for making posts from a user account
class PostsController extends Controller
{
    // Enables authorisation for every route in this file - redirected to login page if user isn't signed in
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        // Validate request (only accept image attachments on upload)
        $data = request()->validate([
           'caption' => 'required',
           'image' => ['required', 'image']
        ]);

        // Return file path
        $imagePath = request('image')->store('uploads', 'public');

        // Resize image
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        // Get authenticated user and create a post (relationship between authenticated user and user's post)
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        // Return to user profile after uploading
        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Models\Post $post) {
        return view('posts.show', compact('post'));
    }
}
