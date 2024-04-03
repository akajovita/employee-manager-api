<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return response()->json($employees);
    }

    public function show($id)
    {
        $employee = $this->employeeService->findById($id);
        return response()->json($employee);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'date_of_birth' => 'required|date|before:today',
            'address' => 'required|string|max:1024',
        ]);

        $employee = $this->employeeService->create($validatedData);

        return response()->json($employee, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $id,
            'date_of_birth' => 'sometimes|required|date|before:today',
            'address' => 'sometimes|required|string|max:1024',
        ]);

        $employee = $this->employeeService->update($id, $validatedData);

        return response()->json($employee);
    }

    public function destroy($id)
    {
        $this->employeeService->delete($id);
        return response()->json(null, 204); // No Content
    }
}
