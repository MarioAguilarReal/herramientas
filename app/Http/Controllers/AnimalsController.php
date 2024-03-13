<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Specie;
use App\Models\Zone;

class AnimalsController extends Controller
{
    public function all()
    {
        $animals = Animal::all();
        return view('animals.all', ['animals' => $animals]);
    }

    public function new(){
        //i want to get all the species and zones to show them in the form
        $species = Specie::all();
        $zones = Zone::all();
        return view('animals.create', compact('species', 'zones'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'specie_id' => 'required',
            'zone_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //valido que la imagen cuente con esos formatos
        ]);

        $imageName = time().'.'.$request->photo->extension(); //le doy un nombre a la imagen
        $request->photo->move(public_path('animals'), $imageName); //guardo la imagen en la carpeta public/animals

        $animal = new Animal();
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->specie_id = $request->specie_id;
        $animal->zone_id = $request->zone_id;
        $animal->photo = $imageName; //guardo el nombre de la imagen en la base de datos


        $animal->save();
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
