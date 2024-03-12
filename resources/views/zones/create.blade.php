<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Zone</title>
</head>
<body>
    <h1>Create zone</h1>
    <form action="{{ route('zones.create') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <button type="submit">Create Zone</button>
    </form>
</body>
</html>