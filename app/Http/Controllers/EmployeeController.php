<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
{
    $query = Employee::query();

    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('name', 'like', "%{$search}%")
              ->orWhere('department', 'like', "%{$search}%");
    }

    $employees = $query->orderBy('id', 'desc')->paginate(10);

    return view('employees.index', compact('employees'));
}


    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:employees,email',
        'department' => 'required',
        'salary' => 'required|numeric|min:1',
    ]);

    Employee::create($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
}

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
{
    $request->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:employees,email,' . $employee->id,
        'department' => 'required',
        'salary' => 'required|numeric|min:1',
    ]);

    $employee->update($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
}

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
