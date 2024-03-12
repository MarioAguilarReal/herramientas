<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Animal</title>
</head>
<body>
    <!-- create a form to register animals-->
    <form action="{{ route('animals.create') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="" disabled selected>Select Gender</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
                <option value="2">Unknown</option>
            </select>
        </div>
        <div>
            <label for="specie">Specie</label>
            <select name="specie_id" id="specie_id">
                <option value="" disabled selected>Specie</option>
                <option value="0">Specie 1</option>
                <option value="1">Specie 2</option>
                <option value="2">Specie 3</option>
                <option value="3">Specie 4</option>
                <option value="4">Specie 5</option>
                <option value="5">Specie 6</option>
            </select>
        </div>
        <div>
            <label for="zone">Zone</label>
            <select name="zone_id" id="zone_id">
                <option value="" disabled selected>Zone</option>
                <option value="0">Specie 1</option>
                <option value="1">Specie 2</option>
                <option value="2">Specie 3</option>
                <option value="3">Specie 4</option>
                <option value="4">Specie 5</option>
                <option value="5">Specie 6</option>
            </select>
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="text" name="photo" id="photo">
        </div>
        <button type="submit">Add Animal</button>
    </form>

</body>
</html>