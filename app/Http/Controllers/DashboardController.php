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
        $species = Specie::count();
        $zones = Zone::count();
        $animals = Animal::count();
        return view('statistics', compact('species', 'zones', 'animals'));
    }
}
