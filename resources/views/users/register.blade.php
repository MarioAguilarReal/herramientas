<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <title>Register</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1>Register</h1>
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
              <label for="age" class="form-label">Age</label>
              <input type="number" class="form-control" name="age" id="age">
            </div>
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" name="gender" id="gender">
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Photo</label>
              <input type="file" class="form-control" name="photo" id="photo">
            </div>
            <div class="mb-3">
              <label for="shift" class="form-label">Shift</label>
              <select class="form-select" name="shift" id="shift">
                <option value="1">Morning</option>
                <option value="2">Afternoon</option>
                <option value="3">Night</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select class="form-select" name="role" id="role">
                <option value="1">Administration</option>
                <option value="2">Security</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Register</button>
              <a href="{{ route('users') }}" class="btn btn-secondary">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
