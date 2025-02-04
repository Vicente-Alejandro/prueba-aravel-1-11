<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    function index() {
        $data = [
            'title' => 'Blog',
            'subtitle' => 'Blog',
            'posts' => Post::paginate(2),
        ];
        return view('blog.index', $data);
    }

    function show(Post $post) {
        $data = [
            'title' => $post->name,
            'subtitle' => $post->name,
            'post' => $post,
        ];
        return view('blog.show', $data);
    }
}
