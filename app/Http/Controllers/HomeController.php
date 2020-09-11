<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = slider::all();
        return view('pages.home.index', ['items' => $items]);
    }
}
