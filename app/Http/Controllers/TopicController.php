<?php

namespace App\Http\Controllers;

use App\Discussions;
use App\Topics;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show($id)
    {
        $t = Topics::findOrFail($id);

        $discussion = $t->discussion;

        return view('discussion.show', ['t' => $t], ['discussion' => $discussion]);
    }
    
    public function create()
    {
        return view('topic.create');
    }

    public function create2($discussion_id)
    {
        $discussion = Discussions::findOrFail($discussion_id);

        return view('topic.create', ['discussion' => $discussion]);
    }

    public function store(Request $request)
    {
        $topic = $request->all();
        
        $topic = Topics::create($topic);

        return redirect('topic/'.$topic->id);
    }

    public function edit($id)
    {
        $topic = Topics::findOrFail($id);
        
        return view('topic.edit', ['topic' => $topic]);
    }

    public function update(Request $request, $id)
    {
        $topic = Topics::findOrFail($id);
        
        $editTopic = $request->all();
        
        $topic->update($editTopic);

        return 'OK';
    }

    public function destroy($id)
    {
        $topic = Topics::findOrFail($id);

        $topic->delete();

        return 'OK';
    }
}
