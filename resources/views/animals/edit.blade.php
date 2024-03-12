<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Animal</title>
</head>
<body>
    <h1>Edit animals</h1>
    <form action="{{ route('animals.update', $animal->id) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $animal->name }}">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="{{ $animal->age }}">
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="0" {{ $animal->gender == 0 ? 'selected' : ''}}>Male</option>
                <option value="1" {{ $animal->gender == 1 ? 'selected' : ''}}>Female</option>
                <option value="2" {{ $animal->gender == 3 ? 'selected' : ''}}>Unknown</option>
            </select>
        </div>
        <div>
            <label for="specie">Specie</label>
            <select name="specie_id" id="specie_id">
                <option value="0" {{ $animal->specie_id == 0 ? 'selected' : ''}}>Specie 1</option>
                <option value="1" {{ $animal->specie_id == 1 ? 'selected' : ''}}>Specie 2</option>
                <option value="2" {{ $animal->specie_id == 2 ? 'selected' : ''}}>Specie 3</option>
                <option value="3" {{ $animal->specie_id == 3 ? 'selected' : ''}}>Specie 4</option>
                <option value="4" {{ $animal->specie_id == 4 ? 'selected' : ''}}>Specie 5</option>
                <option value="5" {{ $animal->specie_id == 5 ? 'selected' : ''}}>Specie 6</option>
            </select>
        </div>
        <div>
            <label for="zone">Zone</label>
            <select name="zone_id" id="zone_id">
                <option value="0" {{ $animal->zone_id == 0 ? 'selected' : ''}}>Zone 1</option>
                <option value="1" {{ $animal->zone_id == 1 ? 'selected' : ''}}>Zone 2</option>
                <option value="2" {{ $animal->zone_id == 2 ? 'selected' : ''}}>Zone 3</option>
                <option value="3" {{ $animal->zone_id == 3 ? 'selected' : ''}}>Zone 4</option>
                <option value="4" {{ $animal->zone_id == 4 ? 'selected' : ''}}>Zone 5</option>
                <option value="5" {{ $animal->zone_id == 5 ? 'selected' : ''}}>Zone 6</option>
            </select>
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="text" name="photo" id="photo" value="{{ $animal->photo }}">
        </div>
        <button type="submit">Edit Animal</button>
    </form>
</body>
</html>