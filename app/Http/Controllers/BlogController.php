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

    public function show($id)
    {
    }
}
