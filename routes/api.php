<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datatables\EmployeesController;
use App\Http\Controllers\Datatables\APIController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/employee', [APIController::class, 'getEmployeeData'])->name('api.employee');
Route::get('/details', [APIController::class, 'getRowDetailsData'])->name('api.details');
