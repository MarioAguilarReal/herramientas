<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edit</title>
</head>
<body>
  <h1>Edit</h1>
  <form action="{{ route('species.update', $species->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="{{ $species->name }}">
    </div>
    <div>
      <button type="submit">Save</button>
    </div>
  </form>
</body>
</html>
