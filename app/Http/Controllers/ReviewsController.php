<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Review;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Symfony\Component\HttpFoundation\Request; not the right request

class ReviewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

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

    public function store(ReviewRequest $request)
    {
        $input = $request->all();

        Review::create($input);

        return redirect('reviews');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.edit', compact('review'));
    }

    public function update($id, ReviewRequest $request)
    {
        $review = Review::findOrFail($id);

        $review->update($request->all());

        return redirect('reviews');
    }
}
