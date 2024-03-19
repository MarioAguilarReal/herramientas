@extends('index')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1>Register Animal</h1>
      <form action="{{ route('animals.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" name="gender" id="gender">
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="specie_id" class="form-label">Specie</label>
          <select class="form-select" name="specie_id" id="specie_id">
            @foreach ($species as $specie)
              <option value="{{ $specie->id }}">{{ $specie->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="zone_id" class="form-label">Zone</label>
          <select class="form-select" name="zone_id" id="zone_id">
            @foreach ($zones as $zone)
              <option value="{{ $zone->id }}">{{ $zone->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
  <a class="btn btn-primary" href="{{ route('animals') }}">Cancel</a>
</div>
@endsection
