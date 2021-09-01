<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add_category(Request $request)
    {
        $cat = new Category;
        $cat->category = $request->category;
        if ($cat->save()) {
            return redirect()->back()->with('success', 'Category added successfully!');
        } else {
            return redirect()->back()->with('error', 'Category could not be saved!');
        }
    }

    public function add_post(Request $req)
    {
        $post = new Post;
        $post->title = $req->title;
        $post->content = $req->content;
        $post->category_id = $req->category_id;
        $post->author_id = Auth::user()->id;
        if ($post->save()) {
            return redirect()->back()->with('success', 'New post added successfully');
        } else {
            return redirect()->back()->with('error', 'Post could not be saved!');
        }
    }

}
