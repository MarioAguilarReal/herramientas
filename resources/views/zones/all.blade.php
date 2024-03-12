<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All zones</title>
</head>
<body>
    <h1>All zones</h1>
    <a href="{{ route('zones.all') }}">Add Zone</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($zones as $zone)
                <tr>
                    <td>{{ $zone->name }}</td>
                    <td>
                        <a href="{{ route('zones.edit', $zone->id) }}">Edit</a>
                        <a href="{{ route('zones.delete', $zone->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>