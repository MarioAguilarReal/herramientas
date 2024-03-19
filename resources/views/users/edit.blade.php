@extends('index')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1>Edit User</h1>
        <form action="{{ route('update-user', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" value="{{ $user->age }}">
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Current Photo</label><br>
            <img src="{{ asset('profilePictures/' . $user->photo) }}" alt="Current Photo" style="max-width: 150px; max-height: 150px;"><br><br>
            <label for="photo" class="form-label">New Photo</label>
            <input type="file" class="form-control" name="photo" id="photo">
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender">
              <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>Male</option>
              <option value="2" {{ $user->gender == 2 ? 'selected' : '' }}>Female</option>
              <option value="3" {{ $user->gender == 3 ? 'selected' : '' }}>Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="shift" class="form-label">Shift</label>
            <select class="form-select" name="shift" id="shift">
              <option value="1" {{ $user->shift == 1 ? 'selected' : '' }}>Morning</option>
              <option value="2" {{ $user->shift == 2 ? 'selected' : '' }}>Afternoon</option>
              <option value="3" {{ $user->shift == 3 ? 'selected' : '' }}>Night</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role" id="role">
              <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Administration</option>
              <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Security</option>
            </select>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('users') }}" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    <div>
  </div>
@endsection
