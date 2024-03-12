<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Animals</title>
</head>
<body>
    <h1>All animals</h1>
    <a href="{{ route('animals.all') }}">Add Animal</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Specie</th>
                <th>Zone</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->age }}</td>
                    <td>{{ $animal->gender}}</td>
                    <td>{{ $animal->specie_id }}</td>
                    <td>{{ $animal->zone_id }}</td>
                    <td>{{ $animal->photo }}</td>
                    <td>
                        <a href="{{ route('animals.edit', $animal->id) }}">Edit</a>
                        <a href="{{ route('animals.delete', $animal->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>