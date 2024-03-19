@extends('index')
@section('content')
    <div class="">
        <h1>Statistics</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Species</h2>
                <p>There are {{ $species }} species</p>
            </div>
            <div class="col-md-6">
                <h2>Zones</h2>
                <p>There are {{ $zones }} zones</p>
            </div>
        </div>
    </div>
@endsection
