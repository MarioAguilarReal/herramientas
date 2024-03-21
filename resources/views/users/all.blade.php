@extends('index')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/users/all.css') }}">
@endsection
@section('content')
  <div class="container">
    <div class="header">
      <div class="item-nav">
        <h3>Users</h3>
      </div>
      <div class="item-nav">
        <a href="{{ route('register') }}" class="btn btn-primary">New</a>
      </div>
    </div>
    <div class="users-container">
      @foreach($users as $user)
        <div class="user-card">
          <div class="user-card-header">
            <img src="{{ asset('profilePictures/' . $user->photo) }}" alt="{{ $user->name }}">
          </div>
          <div class="user-card-body">
            <h4>{{ $user->name }}</h4>
            <p>{{ $user->email }}</p>
          </div>
          <div class="user-card-footer">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
