<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = "Kyle";
        return view('pages.about')->with('name', $name);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function imgGallery()
    {
    }
}
