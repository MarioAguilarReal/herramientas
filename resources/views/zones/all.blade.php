@extends('index')
@section('content')
<div class="container">
    <div class="row">
      <div class="pt-1">
        <h1>All Zones</h1>
        <a href="{{ route('zones.create') }}" class="btn btn-primary">Create</a>
        <table class="table mt-5">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($zones as $zone)
              <tr>
                <td>{{ $zone->id }}</td>
                <td>{{ $zone->name }}</td>
                <td>{{ $zone->description }}</td>
                <td>
                  <a href="{{ route('zones.edit', $zone->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('zones.delete', $zone->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
