<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotels.index', [
            'hotels' => Review::orderBy('stars', 'desc')->get()
        ]);
    }

    public function delete(Request $request, $id)
    {
        $review = Review::where('id', '=', $id)->firstOrFail();
        $review->delete();
        return view('reviews.feedback.deleted');
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function edit(Request $request, $id)
    {
        $review = Review::where('id', '=', $id)->firstOrFail();
        return view('reviews.edit', [
            'review' => $review
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'stars' => ['required', 'integer', 'min:1', 'max:5'],
            'content' => ['required', 'max:255']
        ]);

        $review = new Review();
        $review->title = $request->input('title');
        $review->stars = $request->input('stars');
        $review->content = $request->input('content');
        $review->save();

        return view('reviews.feedback.created');

    }

    public function update(Request $request, $id)
    {
        $review = Review::where('id', '=', $id)->firstOrFail();

        $request->validate([
            'title' => ['required', 'max:255'],
            'stars' => ['required', 'integer', 'min:1', 'max:5'],
            'content' => ['required', 'max:255']
        ]);

        $review->title = $request->input('title');
        $review->stars = $request->input('stars');
        $review->content = $request->input('content');
        $review->save();

        return view('reviews.feedback.modified');

    }

}
