<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Illuminate\Http\Request;
use App\Models\Town;

class RadioController extends Controller
{
    public function index()
    {
        $radios = Radio::all();
        return view('radios.index', compact('radios'));
    }

    public function create()
    {
        $towns = Town::all(); 
        return view('radios.create', compact('towns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'town_name' => 'required|string|exists:towns,name',
            'name' => 'required|string|max:255',
            'frequency' => 'required|numeric',
            'power' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
        ]);


        Radio::create($request->only(['town_name', 'frequency', 'power', 'name', 'address']));

        return redirect()->route('radios.index')->with('success', 'Radio created successfully.');
    }

    public function show(Radio $radio)
    {
        return view('radios.show', compact('radio'));
    }

    public function edit(Radio $radio)
    {
        $towns = Town::all();
        return view('radios.edit', compact('radio', 'towns'));
    }

    public function update(Request $request, Radio $radio)
    {
        $request->validate([
            'town_name' => 'required|string|exists:towns,name',
            'frequency' => 'required|numeric',
            'power' => 'nullable|numeric',
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $radio->update($request->only(['town_name', 'frequency', 'power', 'name', 'address']));

        return redirect()->route('radios.index')->with('success', 'Radio updated successfully.');
    }

    public function destroy(Radio $radio)
    {
        $radio->delete();
        return redirect()->route('radios.index')->with('success', 'Radio deleted successfully.');
    }
}
