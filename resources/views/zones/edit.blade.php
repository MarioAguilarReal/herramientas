<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Zone</title>
</head>
<body>
    <h1>Edit zones</h1>
    <form action="{{ route('zones.update', $zone->id) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $zone->name }}">
        </div>
        <button type="submit">Edit Zone</button>
    </form>
</body>
</html>