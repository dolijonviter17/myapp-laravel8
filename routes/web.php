<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Models\User;
use App\Http\Livewire\Questions;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\Datatables\EmployeesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // dd(App\Models\Question::all());
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::livewire('questions', 'questions');
Route::resource('questions', QuestionsController::class);
Route::resource('appointments', AppointmentsController::class);
// Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
Route::resource('services', ServicesController::class);
// Route::get('/quest', Questions::class);

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/mytemplate', function () {
    return view('layouts.mytemplate');
});
// Route::get('/teams', function () {
//     DB::table('teams')->insertGetId(
//         ['user_id' => 1, 'name' => 'Mr. Wilfredo', 'personal_team' => false]
//     );
//     return 'success';
//     // dd(User::all());
// });

Route::get('/dsa', [DsaController::class, 'findQuestion']);
Route::get('/employee', [EmployeesController::class, 'index'])->name('employee');
Route::get('/details', [EmployeesController::class, 'getRowDetails'])->name('details');   