<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::query()->with('category')->get();
        //$posts = DB::table('posts')
        //    ->join('categories', 'posts.category_id', '=', 'categories.id')
        //    ->select('posts.*', 'categories.name')
        //   ->get();
        return view('layout.dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('layout.dashboard.posts.create', compact('categories'), compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $post = new Post([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->input('content'),
            'category_id' => $request->category_id,
            'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach($request->tag_id, ['create_date' => date('Y-m-d'), 'create_time' => date('H:i:s')]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     */
    public function edit(Post $post)
    {
//        dd($post->tags->pluck('id'))->toArray();
        $categories = Category::all();
        $tags = Tag::all();
        return view('layout.dashboard.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->short_content = $request->short_content;
        $post->content = $request->input('content');
        $post->category_id = $request->category_id;
        $post->save();
        $post->tags()->sync($request->tag_id,
            ['create_date' => date('Y-m-d'), 'create_time' => date('H:i:s')]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
