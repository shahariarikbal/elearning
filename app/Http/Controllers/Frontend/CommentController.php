<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentStore(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);

        $data = [
            'message' => $request->message,
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
        ];

        Comment::create($data);

        return redirect()->back()->with('message', 'Comment has been submitted');
    }
}
