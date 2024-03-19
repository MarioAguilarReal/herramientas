@extends('index')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1>All Species</h1>
        <a href="{{ route('species.create') }}" class="btn btn-primary">Create</a>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($species as $specie)
              <tr>
                <td>{{ $specie->id }}</td>
                <td>{{ $specie->name }}</td>
                <td>{{ $specie->description }}</td>
                <td>
                  <a href="{{ route('species.edit', $specie->id) }}" class="btn btn-warning">Edit</a> -->
                  <a href="{{ route('species.delete', $specie->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
