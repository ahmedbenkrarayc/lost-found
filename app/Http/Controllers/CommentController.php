<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:255',
            'annonce_id' => 'required|integer|exists:annonce,id'
        ]);

        Comment::create([
            'comment' => $validated['comment'],
            'annonce_id' => $validated['annonce_id'],
            'membre_id' => Auth::id(),
        ]);

        return back()->with('success', 'Comment created successfully');
    }
}
