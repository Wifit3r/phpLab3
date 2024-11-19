<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Employee::class, 'employee');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_year' => 'required|integer',
            'education' => 'required',
            'specialty' => 'required',
            'registration_date' => 'required|date'
        ]);

        $data = $request->all();
        $data['creator_user_id'] = auth()->user()->id;

        Employee::create($data);

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_year' => 'required|integer',
            'education' => 'required',
            'specialty' => 'required',
            'registration_date' => 'required|date'
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
