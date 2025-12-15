<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
        {
        $request->validate([
            'name_food' => 'required|string|max:255',
            'name_store' => 'required|string|max:255',
            'quantity' => 'required|integer',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order created successfully.');
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
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_food' => 'required|string|max:255',
            'name_store' => 'required|string|max:255',
            'quantity' => 'required|integer',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
      {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.index')
                         ->with('success', 'Order deleted successfully.');
    }
}
