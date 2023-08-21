<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisdom;

class WisdomController extends Controller
{

    public function index()
    {
        $Wisdom = Wisdom::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('Wisdom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Wisdom::create($request->all());

        return redirect()->route('products')->with('success', 'Wisdom added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Wisdom = Wisdom::findOrFail($id);

        return view('products.show', compact('Wisdom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Wisdom = Wisdom::findOrFail($id);

        return view('products.edit', compact('Wisdom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Wisdom = Wisdom::findOrFail($id);

        $Wisdom->update($request->all());

        return redirect()->route('products')->with('success', 'Wisdom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Wisdom = Wisdom::findOrFail($id);

        $Wisdom->delete();

        return redirect()->route('products')->with('success', 'Wisdom deleted successfully');
    }
}