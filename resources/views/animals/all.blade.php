@extends('index')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/animals/all.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="header">
    <div class="item-nav">
      <h3>Animales</h3>
    </div>
    <div class="item-nav">
      <a href="{{ route('animals.create') }}" class="btn btn-primary">Crear</a>
    </div>
  </div>
  <div class="animals-container">
    @foreach($animals as $animal)
      <div class="animal-card">
        <div class="animal-card-header">
          <img src="{{ asset('animals/' . $animal->photo) }}" alt="{{ $animal->name }}">
        </div>
        <div class="animal-card-body">
          <h4>{{ $animal->name }}</h4>
          <p>{{ $animal->age }} Years old</p>
          <p>{{ $animal->gender }}</p>
          <p>{{ $animal->specie->name }}</p>
          <p>{{ $animal->zone->name }}</p>
        </div>
        <div class="animal-card-footer">
          <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning">Editar</a>
          <a href="{{ route('animals.delete', $animal->id) }}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
