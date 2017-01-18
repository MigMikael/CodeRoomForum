<?php

namespace App\Http\Controllers;

use App\Replies;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function create()
    {
        return view('reply.create');
    }

    public function store(Request $request)
    {
        $reply = $request->all();

        $reply = Replies::create($reply);

        return redirect('topic/'.$reply->topic_id);
    }
}
