<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Achievement;
use App\Models\Department;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::with(['department', 'achievements'])->paginate(5);
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::get();
        $achievements = Achievement::get();
        // dd($departments);
        return view('employees.create', compact('departments', 'achievements'));
    }

    public function store(EmployeeStoreRequest $request)
    {
        // dd($request->all());

        $employee = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->department_id,
        ]);

        if ($request->achievement_ids) {
            foreach ($request->input('achievement_ids') as $achievementId) {
                $employee->achievements()->attach($achievementId, ['achievement_date' => now()]);
            }
        }

        return redirect()->route('employee.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $employee = Employee::with(['department', 'achievements'])->find($id);
        $departments = Department::all();
        $achievements = Achievement::all();
        return view('employees.edit', compact('employee', 'departments', 'achievements'));
    }

    public function update(EmployeeUpdateRequest $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->department_id,
        ]);

        if ($request->achievement_ids) {
            foreach ($request->input('achievement_ids') as $achievementId) {
                $employee->achievements()->attach($achievementId, ['achievement_date' => now()]);
            }
        }

        return redirect()->route('employee.index');
    }

    public function destroy(string $id)
    {
        $employee = Employee::find($id)->delete();
        return redirect()->route('employee.index');
    }
}
