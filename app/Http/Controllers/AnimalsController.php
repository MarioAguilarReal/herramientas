<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function all()
    {
        $animals = Animal::all();
        return view('animals.all', ['animals' => $animals]);
    }
    public function create(Request $request)
    {
        $animal = new Animal();
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->photo = $request->photo;
        $animal->gender = $request->gender;
        $animal->specie_id = $request->specie_id;
        $animal->zone_id = $request->zone_id;
        $animal->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $animal = Animal::find($request->id);
        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return redirect()->route('animals');
    }

    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('animals');
    }

}
