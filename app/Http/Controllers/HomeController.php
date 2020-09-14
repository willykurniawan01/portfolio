<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use App\gallery;

class HomeController extends Controller
{
    public function index()
    {
        $items = slider::all();
        $gallery = gallery::all();
        return view('pages.home.index', ['items' => $items, 'gallery' => $gallery]);
    }

    public function gallery()
    {
        $items = gallery::all();
        return view('pages.home.gallery', ['items' => $items]);
    }

    public function contact()
    {
        return view('pages.home.contact');
    }

    public function about()
    {
        return view('pages.home.about');
    }
}
