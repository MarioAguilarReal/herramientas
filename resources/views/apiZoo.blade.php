@extends('index')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/animals/all.css') }}">
@endsection

@section('content')
<div class="animals-catalog">
    <h1>API Zoo</h1>
    <div class="animals-container">
        @foreach($animals as $animal)
            <div class="animal-card">
              <div class="animal-card-header">
                <img src="{{ $animal['image_link'] }}" class="card-img-top" alt="{{ $animal['name'] }}">
              </div>
                <div class="animal-card-body">
                    <h5 class="card-title">{{ $animal['name'] }}</h5>
                    <p class="card-text">{{ $animal['habitat'] }}</p>
                    <p class="card-text">{{ $animal['animal_type'] }}</p>
                </div>
                <div class="animal-card-footer">
                    <a href="{{route('api.add', $animal['id'])}}" class="btn btn-primary">Get to our Zoo</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
