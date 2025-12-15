<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Food::create($request->all());
        return redirect()->route('foods.index')
                         ->with('success', 'Food created successfully.');

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
        $food = Food::findOrFail($id);
        return view('food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $food = Food::findOrFail($id);
        $food->update($request->all());

        return redirect()->route('foods.index')
                         ->with('success', 'Food updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect()->route('foods.index')
                         ->with('success', 'Food deleted successfully.');
    }
}
