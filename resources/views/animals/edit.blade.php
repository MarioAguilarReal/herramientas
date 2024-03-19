@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Edit Animal</h1>
                <form action="{{ route('animals.update',['id' => $animal->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $animal->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age" value="{{ $animal->age }}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender">
                            <option value="1" {{ $animal->gender == 1 ? 'selected' : ''}}>Male</option>
                            <option value="2" {{ $animal->gender == 2 ? 'selected' : ''}}>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="specie_id" class="form-label">Specie</label>
                        <select class="form-select" name="specie_id" id="specie_id">
                            @foreach ($species as $specie)
                                <option value="{{ $specie->id }}" {{ $animal->specie_id == $specie->id ? 'selected' : ''}}>{{ $specie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="zone_id" class="form-label">Zone</label>
                        <select class="form-select" name="zone_id" id="zone_id">
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}" {{ $animal->zone_id == $zone->id ? 'selected' : ''}}>{{ $zone->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Current Photo</label>
                        <div>
                            @if($animal->photo)
                                <img src="{{ asset('animals/'.$animal->photo) }}" alt="{{ $animal->photo }}" style="max-width: 200px; margin-top: 10px;">
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit"class="btn btn-primary">Update</button>
                        <a href="{{ route('animals') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
