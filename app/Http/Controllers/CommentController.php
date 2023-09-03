<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $comment = new Comment();
        $comment->fullname = $validatedData['name'];
        $comment->email = $validatedData['email'];
        $comment->feedback = $validatedData['message'];
        $comment->save();

        return redirect()->back()->with('success', 'Comment saved successfully.');
    }

public function showComments()
{
    $comments = Comment::all();

    return view('comments.show', compact('comments'));
}

public function index()
{
    // Retrieve all comments from the database
    $comments = Comment::all();

    // Pass the comments to the view for display
    return view('comments', ['comments' => $comments]);
}

}
