<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Animal;
use App\Models\Specie;
use App\Models\Zone;

class apiZooController extends Controller
{
    public function fetchDataFromApi(){
        $client = new Client([
            'verify' => false,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
        $response = $client->get('https://zoo-animal-api.herokuapp.com/api/animals');
        $data = json_decode($response->getBody(), true);
        return view('apiZoo', ['animals' => $data]);
    }

    public function addAnimal($id){
        $client = new Client([
            'verify' => false,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
        $response = $client->get('https://zoo-animal-api.herokuapp.com/api/animals/');
        $data = json_decode($response->getBody(), true);
        $animal = $data[$id-1];
        $newAnimal = new Animal();
        $newAnimal->name = $animal['name'];
        $newAnimal->age = 1;
        $newAnimal->gender = 'Male';
        $newAnimal->photo = $animal['image_link'];
        $specie = Specie::where('name', $animal['animal_type'])->first();
        if(!$specie){
            $specie = new Specie();
            $specie->name = $animal['animal_type'];
            $specie->save();
        }
        $newAnimal->specie_id = $specie->id;
        $zone = Zone::where('name', $animal['habitat'])->first();
        if(!$zone){
            $zone = new Zone();
            $zone->name = $animal['habitat'];
            $zone->save();
        }
        $newAnimal->zone_id = $zone->id;
        $newAnimal->save();
        return redirect()->route('animals');
    }
}
