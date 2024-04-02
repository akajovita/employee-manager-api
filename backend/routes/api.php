<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;

// Route for employees
Route::apiResource('employees', EmployeeController::class);
