<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specie;

class SpeciesController extends Controller
{
    public function all()
    {
        $species = Specie::all();
        return view('species.all', compact('species'));
    }

    public function create(Request $request)
    {
        $specie = new Specie();
        $specie->name = $request->name;
        $specie->save();
        return redirect()->route('species');
    }

    public function edit($id)
    {
        $specie = Specie::findOrFail($id);
        return view('species.edit', compact('specie'));
    }

    public function update(Request $request, $id)
    {
        $specie = Specie::findOrFail($id);
        $specie->update($request->all());
        return redirect()->route('species');
    }

    public function delete($id)
    {
        $specie = Specie::findOrFail($id);
        $specie->delete();
        return redirect()->route('species');
    }
}
