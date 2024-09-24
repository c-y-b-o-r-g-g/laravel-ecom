<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $post = Post::all();

            $user_type = Auth::user()->user_type;


            if ($user_type == 'user') {
                return view('home.homepage', compact('post'));
            } elseif ($user_type == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $post = Post::all();
        return view('home.homepage', compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
       
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        

        $post->user_id = $userid;
        $post->name = $username;
        $post->user_type = $usertype;

        $post->post_status = 'pending';

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('postimage'), $imagename);
            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back();

        // return redirect()->back()->with('message', 'Post added successfully!');
    }


}
