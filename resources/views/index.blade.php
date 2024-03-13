<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Zoo</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1>Zoo</h1>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        <a href="{{ route('users') }}" class="btn btn-primary">Users</a>
        <a href="{{ route('species') }}" class="btn btn-primary">Species</a>
        <a href="{{ route('zones') }}" class="btn btn-primary">Zones</a>
        <a href="{{ route('animals') }}" class="btn btn-primary">Animals</a>
        <a href="{{ route('logout') }}" class="btn btn-secondary">Logout</a>
      </div>
    </div>

  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
