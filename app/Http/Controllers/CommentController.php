<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Task $task)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $task->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('tasks.show', $task);
    }

    public function destroy(Task $task, Comment $comment)
    {
        $comment->delete();
        return redirect()->route('tasks.show', $task);
    }
}
