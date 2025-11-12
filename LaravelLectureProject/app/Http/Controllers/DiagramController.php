<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Illuminate\Support\Facades\DB;

class DiagramController extends Controller
{
    public function index()
    {
        $data = DB::table('radios')
            ->join('towns', 'radios.town_name', '=', 'towns.name')
            ->select('towns.county_name', DB::raw('COUNT(radios.id) as radios_count'))
            ->groupBy('towns.county_name')
            ->orderBy('towns.county_name')
            ->get();

        $labels = $data->pluck('county_name');
        $values = $data->pluck('radios_count');

        return view('diagram', compact('labels', 'values'));
    }
}