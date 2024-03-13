<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>All Animals</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h1>All Animals</h1>
            <a href="{{ route('animals.create') }}" class="btn btn-primary">Create</a>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Specie</th>
                  <th>Zone</th>
                  <th>Photo</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($animals as $animal)
                  <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->age }}</td>
                    <td>{{ $animal->gender }}</td>
                    <td>{{ $animal->specie->name }}</td>
                    <td>{{ $animal->zone->name }}</td>
                    <td><img src="{{ $animal->photo }}" alt="{{ $animal->name }}" width="50"></td>
                    <td>
                      <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('animals.delete', $animal->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <a class="btn btn-primary" href="{{ route('index') }}">Home</a>
      </div>
</body>
</html>
