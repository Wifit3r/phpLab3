<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
<h1>Add New Employee</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label>Code:</label>
    <input type="text" name="code" required><br>
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Gender:</label>
    <input type="text" name="gender" required><br>
    <label>Birth Year:</label>
    <input type="number" name="birth_year" required><br>
    <label>Education:</label>
    <input type="text" name="education" required><br>
    <label>Specialty:</label>
    <input type="text" name="specialty" required><br>
    <label>Registration Date:</label>
    <input type="date" name="registration_date" required><br>
    <button type="submit">Add</button>
</form>
</body>
</html>
