<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return redirect()->route('animals');
    }

    public function edit(Request $request)
    {
        $animal = Animal::find($request->id);
        $species = Specie::all();
        $zones = Zone::all();
        return view('animals.edit', compact('animal', 'species', 'zones'));
    }

    public function update(Request $request, $id)
    {
        
        $animal = Animal::findOrFail($id);

        // Verifica si se ha cargado una nueva imagen
        if ($request->hasFile('photo')) {
            // Elimina la imagen anterior si existe
            if ($animal->photo) {
                if(file_exists(public_path('animals/' . $animal->photo))){
                    unlink(public_path('animals/' . $animal->photo));
                }
            }

            // Guarda la nueva imagen
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('animals'), $imageName);

            // Actualiza la propiedad 'photo' del animal con el nombre de la nueva imagen
            $animal->photo = $imageName;
        }

        // Actualiza el resto de los datos del animal
        $animal->fill($request->except('photo'))->save();

        return redirect()->route('animals');
    }

    public function delete(Request $request)
    {
        $animal = Animal::find($request->id);
        if ($animal->photo) {
            if(file_exists(public_path('animals/' . $animal->photo))){
                unlink(public_path('animals/' . $animal->photo));
            }
        }
        $animal->delete();
        return redirect()->route('animals');
    }
}
