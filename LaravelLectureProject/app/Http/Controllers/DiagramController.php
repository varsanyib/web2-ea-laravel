<?php

namespace App\Http\Controllers;

use App\Models\Region;

class DiagramController extends Controller
{
    public function index()
    {
        $data = Region::withCount('radios')->orderBy('name')->get();
        $labels = $data->pluck('name');
        $values = $data->pluck('radios_count');
        return view('diagram', compact('labels','values'));
    }
}
