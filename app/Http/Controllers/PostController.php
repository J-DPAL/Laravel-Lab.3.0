<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display all posts with their authors
    public function index()
    {
        $posts = Post::with('author')->get(); // eager loading 'author'
        return view('posts.index', compact('posts'));
    }

    // Display a single post with its author and comments
    public function show($id)
    {
        $post = Post::with('author', 'comments')->findOrFail($id); // eager loading 'author' and 'comments'
        return view('posts.show', compact('post'));
    }
}
