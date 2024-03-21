<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Logic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  @yield('styles')
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
  <div class="admin-page">

    <div class="side-menu d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary">
      <a href="{{route('index')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Zoo</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{route('index')}}" class="nav-link text-white {{request()->is('/') ? 'active' : ''}}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="/animals/all"></use></svg>
            Statistics
          </a>
          <hr />
        </li>
        <li class="nav-item">
          <a href="{{route('animals')}}" class="nav-link text-white {{request()->is('animals/all') ? 'active' : ''}}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="/animals/all"></use></svg>
            Animals
          </a>
        </li>
        <li>
          <a href="{{route('zones')}}" class="nav-link text-white {{request()->is('zones') ? 'active' : ''}}" >
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Zones
          </a>
        </li>
        <li>
          <a href="{{route('species')}}" class="nav-link text-white {{request()->is('species') ? 'active' : ''}}" >
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Species
          </a>
          <hr />
        </li>
        <li>
          <a href="{{route('users')}}" class="nav-link text-white {{request()->is('users') ? 'active' : ''}}" >
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Users
          </a>
          <hr />
        </li>
        <li>
          <a href="{{route('apiZoo')}}" class="nav-link text-white {{request()->is('apiZoo') ? 'active' : ''}}" >
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Get more Animals
          </a>
          <hr />
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('profilePictures/' . auth()->user()->photo) }}" alt="{{ auth()->user()->name }}" width="32" height="32" class="rounded-circle me-2">
        <strong>
            {{ auth()->user()->name }}
          <strong>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="main-content">
      @yield('content')
    </div>
  </div>
</body>
<!-- add local scripts -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
