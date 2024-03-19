@extends('index')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1>Users</h1>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Age</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->email }}</td>
              <td>
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
              <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
    <a class="btn btn-primary" href="{{ route('index') }}">Home</a>
  </div>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
