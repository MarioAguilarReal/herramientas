<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
}
