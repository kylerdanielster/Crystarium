<?php

namespace App\Http\Controllers;

use App\Review;
use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();

        return view('reviews.index', compact('reviews'));
    }

    public function show($id)
    {
        $review = Review::findorfail($id);

        return view('reviews.show', compact('review'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store()
    {
        $input = Request::all();

        Review::create($input);

        return redirect('reviews');
    }
}
