<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $tags = Tag::all();
        return view('layout.dashboard.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('layout.dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagRequest $request)
    {
        $tag = new Tag([
            'name'=>$request->name
        ]);
        $tag->save();
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tag $tag
     */
    public function show(Tag $tag)
    {
        return  view('layout.dashboard.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tag $tag
     */
    public function edit(Tag $tag)
    {
        return view('layout.dashboard.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tag $tag
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
