<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
<h1>Edit Employee</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Code:</label>
    <input type="text" name="code" value="{{ $employee->code }}" required><br>
    <label>Name:</label>
    <input type="text" name="name" value="{{ $employee->name }}" required><br>
    <label>Gender:</label>
    <input type="text" name="gender" value="{{ $employee->gender }}" required><br>
    <label>Birth Year:</label>
    <input type="number" name="birth_year" value="{{ $employee->birth_year }}" required><br>
    <label>Education:</label>
    <input type="text" name="education" value="{{ $employee->education }}" required><br>
    <label>Specialty:</label>
    <input type="text" name="specialty" value="{{ $employee->specialty }}" required><br>
    <label>Registration Date:</label>
    <input type="date" name="registration_date" value="{{ $employee->registration_date }}" required><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
