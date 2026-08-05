<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class FigController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('id')->get()->keyBy('id');
        return view('home', compact('photos'));
    }

    public function products()
    {
        $photos = Photo::orderBy('id')->get()->keyBy('id');
        return view('products', compact('photos'));
    }

    public function about()
    {
        $photos = Photo::orderBy('id')->get()->keyBy('id');
        return view('about', compact('photos'));
    }

    public function contact()
    {
        return view('contact');
    }
}
