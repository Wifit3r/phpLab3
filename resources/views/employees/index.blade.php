<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
<h1>Employees List</h1>
<a href="{{ route('employees.create') }}">Add New Employee</a>
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth Year</th>
        <th>Education</th>
        <th>Specialty</th>
        <th>Registration Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->code }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->birth_year }}</td>
            <td>{{ $employee->education }}</td>
            <td>{{ $employee->specialty }}</td>
            <td>{{ $employee->registration_date }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
