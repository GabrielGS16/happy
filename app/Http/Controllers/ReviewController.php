<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string|max:255',
            'food_id' => 'nullable|string',
            'rating' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')
                         ->with('success', 'Review created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'user_id' => 'required|string|max:255',
            'food_id' => 'nullable|string',
            'rating' => 'required|integer',
            'comment' => 'nullable|string',
        ]);
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->route('reviews.index')
                         ->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')
                         ->with('success', 'Review deleted successfully.');
    }
}
