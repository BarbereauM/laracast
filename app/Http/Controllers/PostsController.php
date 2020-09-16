<?php

namespace App\Http\Controllers;


class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first' => 'Hello, this is my first post',
            'my-second' => 'Now this is the last'
        ];
    
        if (! array_key_exists($post, $posts)) {
            abort(404, 'Sorry, we couldn\'t found this page.');
        }
    
        return view('post', [
            'post' => $posts[$post] ?? 'Nothing'
        ]);
    }
}
