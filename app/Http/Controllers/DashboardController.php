<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Zone;
use App\Models\Specie;

class DashboardController extends Controller
{
    public function statistics()
    {
        //get all species
        $species = Specie::all();
        //get all zones
        $zones = Zone::all();
        //get all animals
        $animals = Animal::all();
        return view('statistics', compact('species', 'zones', 'animals'));
    }
}
