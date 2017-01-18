<?php

namespace App\Http\Controllers;

use App\Discussions;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function show($id)
    {
        $discussion = Discussions::findOrFail($id);

        return view('discussion.show', ['discussion' => $discussion]);
    }

    public function create()
    {
        return view('discussion.create');
    }

    public function store(Request $request)
    {
        $discussion = $request->all();

        $discussion = Discussions::create($discussion);

        return $discussion;
    }

    public function edit($id)
    {
        $discussion = Discussions::findOrFail($id);

        return view('discussion.edit', ['discussion' => $discussion]);
    }

    public function update(Request $request, $id)
    {
        $discussion = Discussions::findOrFail($id);

        $editDiscussion = $request->all();

        $discussion->update($editDiscussion);

        return 'OK';
    }

    public function destroy($id)
    {
        $discussion = Discussions::findOrFail($id);

        $discussion->delete();

        return 'OK';
    }
}
