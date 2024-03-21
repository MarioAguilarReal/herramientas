<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">

  <title>Login</title>
</head>
<body>
  <div class="login">
    <div class="image-section">
      <img src="{{ asset('images/backgorund.jpg')}}" alt="">
    </div>
    <div class="login-section">
      <div class="login-form-section">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="mb-3 form-check">
            <a href="{{ route('register') }}">I don't have an account</a>
          </div>
          <button type="submit" class="login-btn">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
