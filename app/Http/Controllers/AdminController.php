<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {

        $user = Auth::user();
        $user_id = $user->id;
        $name = $user->name;
        $user_type = $user->user_type;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->post_status = 'active';

        $post->user_id = $user_id;
        $post->name = $name;
        $post->user_type = $user_type;


        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('postimage'), $imagename);
            $post->image = $imagename;
        }

        $post->save();


        return redirect()->back()->with('message', 'Post added successfully!');

        // return redirect()->route('admin.post_page')->with('success', 'Post added successfully!');
    }


    public function show_posts()
    {
        $posts = Post::all();
        return view('admin.show_posts', compact('posts'));
    }



}
