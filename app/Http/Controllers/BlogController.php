<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $items = post::all();
        return view('pages.home.blog.index', ['items' => $items]);
    }

    public function show($slug)
    {
        $item = post::where('slug', $slug)
            ->firstOrFail();

        $post = post::orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('pages.home.blog.detail', ['item' => $item, 'post' => $post]);
    }
}
