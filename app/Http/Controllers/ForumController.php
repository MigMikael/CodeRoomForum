<?php

namespace App\Http\Controllers;

use App\Forums;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forums::all();

        return view('forum.index', ['forums' => $forums]);
    }

    public function show($id)
    {
        $forum = Forums::findOrFail($id);

        return view('forum.show', ['forum' => $forum]);
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $forum = $request->all();

        Forums::create($forum);

        return redirect('forum');
    }

    public function edit($id)
    {
        $forum = Forums::findOrFail($id);

        return view('forum.edit', ['forum' => $forum]);
    }

    public function update(Request $request, $id)
    {
        $forum = Forums::findOrFail($id);

        $editForum = $request->all();

        $forum->update($editForum);

        return redirect('forum');
    }

    public function destroy($id)
    {
        $forum = Forums::findOrFail($id);

        $forum->delete();

        return redirect('forum');
    }
}
