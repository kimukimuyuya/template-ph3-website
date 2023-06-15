<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Models\User;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/quiz',
    [QuizController::class, 'index']
)->middleware('auth', 'verified')->name('quiz');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::put('questions/{question}/restore', [QuestionController::class, 'restore'])->name('questions.restore');
    Route::resource('questions', QuestionController::class);  
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
