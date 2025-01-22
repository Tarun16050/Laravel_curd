<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeFormController;
use App\Http\Controllers\EmpController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('learn_laravel.learnTemplate');
});
Route::get('/layout', function () {
    return view('learn_layout.layout');
});


Route::get( '/intro',function ( ) {return view( 'learn_layout.introduction');})->name('introduction');
Route::get( '/content',function ( ) {return view( 'learn_layout.content');})->name('content');

// Employee
Route::get( '/employee', [EmployeeController::class, 'index'])->name('employee'); //listing
Route::get( '/employee/view/{id}', [EmployeeController::class, 'view'])->name('employee.view'); //view
Route::get( '/employee/create', [EmployeeController::class, 'create'])->name('employee.create'); //create
Route::get( '/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.update'); //update
Route::get( '/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete'); //delete

// Employee Form Submit
Route::get( '/employeeData', [EmployeeFormController::class, 'index'])->name('employeeData'); //listing
Route::get( '/employeeData/view/{id}', [EmployeeFormController::class, 'view'])->name('employeeData.view'); //view
Route::get( '/employeeData/create', [EmployeeFormController::class, 'create'])->name('employeeData.create'); //Create
Route::post( '/employeeData/store', [EmployeeFormController::class, 'store'])->name('employeeData.store'); //store
Route::get( '/employeeData/edit/{id}', [EmployeeFormController::class, 'edit'])->name('employeeData.edit'); //update
Route::put( '/employeeData/update/{id}', [EmployeeFormController::class, 'update'])->name('employeeData.update'); //update
Route::get( '/employeeData/destroy/{id}', [EmployeeFormController::class, 'destroy'])->name('employeeData.destroy'); //delete



Route::resource('emp', EmpController::class);
