<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Models\User;
use App\Http\Livewire\Questions;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\RestApi\InfoCoronaController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AcceptAnswerController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\VoteQuestionController;
use App\Http\Controllers\VoteAnswerController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'myQuestion'])->name('dashboard');;
    Route::resource('/questions', QuestionsController::class)->except('show');
    Route::get('/questions/{slug}', [QuestionsController::class, 'show'])->name('questions.show');
    Route::post('/answers/{answer}/accept', AcceptAnswerController::class)->name('answers.accept');
    Route::resource('questions.answers', AnswersController::class)->except(['index', 'create', 'show']);

    Route::post('/questions/{question}/favorites', [FavoritesController::class, 'store'])->name('questions.favorite');
    Route::delete('/questions/{question}/favorites', [FavoritesController::class, 'destroy'])->name('questions.unfavorite');
    Route::post('/questions/{question}/vote', VoteQuestionController::class);
    Route::post('/answers/{answer}/vote', VoteAnswerController::class);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'myQuestion'])->name('dashboard');
