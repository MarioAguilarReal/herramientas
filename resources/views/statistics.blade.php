@extends('index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/statistics.css') }}">
@endsection

@section('content')
    <div class="">
        <h1>Statistics</h1>
        <div class="tables">
            <div class="top">
                <div class="table">
                    <h2>Species</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($species as $specie)
                                <tr>
                                    <th scope="row">{{ $specie->id }}</th>
                                    <td>{{ $specie->name }}</td>
                                    <td>{{ $specie->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table">
                    <h2>Zones</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($zones as $zone)
                                <tr>
                                    <th scope="row">{{ $zone->id }}</th>
                                    <td>{{ $zone->name }}</td>
                                    <td>{{ $zone->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="table">
                    <h2>Animals</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Specie</th>
                                <th scope="col">Zone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animals as $animal)
                                <tr>
                                    <th scope="row">{{ $animal->id }}</th>
                                    <td>{{ $animal->name }}</td>
                                    <td>{{ $animal->specie->name }}</td>
                                    <td>{{ $animal->zone->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <div class="bottom"></div>
        </div>
    </div>
@endsection
