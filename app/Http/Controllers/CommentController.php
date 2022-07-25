<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment_type = $request->comment_type;
        $comment->comment = $request->comment;
        $comment->service_id = $request->service_id;

        $comment->user()->associate($request->user());

        $service = Service::find($request->service_id);

        $service->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $service = Service::find($request->get('service_id'));

        $service->comments()->save($reply);

        return back();

    }

    public function destroy($id){
        $comment = Comment::find($id)->delete();
        return back();
    }
}
