<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home', [SurahController::class, 'index'])->name('home');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/surahs/{surah}', [HomeController::class, 'show'])->name('surahs.show');

Route::get('/sur', [SurahController::class, 'index'])->name('surahs.index');
// Route::resource('surahs', SurahController::class);
// Route::view('/surahs/create{path}', 'surahs.create');
Route::get('/surahs/create', [SurahController::class, 'create'])->name('surahs.create');
Route::post('/surahs/store', [SurahController::class, 'store'])->name('surahs.store');
Route::delete('/surahs/{id}', [SurahController::class, 'destroy'])->name('surahs.destroy');
// Route::resource('surahs', SurahController::class)->only([
//     'index', 'create', 'store', 'destroy'
// ]);


Route::get('/surahs/{id}/questions', [QuestionController::class, 'showQuestions'])->name('surahs.questions');
Route::post('/surahs/{id}/submit-answers', [ResultController::class, 'submitAnswers'])->name('surahs.submitAnswers');
// Route::get('/surahs/create', [SurahController::class, 'store'])->name('surahs.create');

Route::post('/quiz/{surah}/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
Route::get('/quiz/result/{score}/{total}', [QuizController::class, 'showResult'])->name('quiz.result');




Route::post('/questions/{id}/submit', [QuestionController::class, 'submitAnswers'])->name('questions.submit');
Route::get('/results', [ResultController::class, 'index'])->name('results.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/questions/create/{surah}', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
});
// Route::middleware(['auth'])->group(function () {
//     Route::get('/surahs/make', [SurahController::class, 'create'])->name('surahs.make');
//     // Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
// });

require __DIR__.'/auth.php';
