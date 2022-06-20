<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'posts1'
            ],
            [
                'title' => 'post2'
            ]
        ];
        return view('layout.home.index', compact('posts'));
    }
}
