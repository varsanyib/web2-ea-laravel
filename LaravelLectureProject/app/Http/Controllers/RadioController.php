<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadioController extends Controller
{

    public function index()
    {
        $radios = \App\Models\Radio::with('region')->latest()->paginate(20);
        return view('radios.index', compact('radios'));
    }

    public function create()
    {
        $regions = \App\Models\Region::orderBy('name')->get();
        return view('radios.create', compact('regions'));
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
            'region_id' => 'required|exists:regions,id',
            'name' => 'required|string|max:255',
            'frequency' => 'required|string|max:255',
        ]);
        \App\Models\Radio::create($data);
        return redirect()->route('radios.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(\App\Models\Radio $radio)
    {
        $regions = \App\Models\Region::orderBy('name')->get();
        return view('radios.edit', compact('radio','regions'));
    }

    public function update(\Illuminate\Http\Request $request, \App\Models\Radio $radio)
    {
        $data = $request->validate([
            'region_id' => 'required|exists:regions,id',
            'name' => 'required|string|max:255',
            'frequency' => 'required|string|max:255',
        ]);
        $radio->update($data);
        return redirect()->route('radios.index');
    }

    public function destroy($id)
    {
        //
    }
}
