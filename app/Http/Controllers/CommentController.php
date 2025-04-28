<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        // Create and save the new comment
        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $validated['commenter_name'],
            'comment' => $validated['comment'],
        ]);

        // Redirect back to the post view with a success message
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
