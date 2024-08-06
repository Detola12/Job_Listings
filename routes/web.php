<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index'])->name('home');
Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', \App\Http\Controllers\TagController::class);
Route::get('/employers', function (){
    $employers = \App\Models\Employer::all();
    return view('employers', [
        'employers' => $employers
    ]);
})->name('companies');

/*****************************Authenticated Routes***********************************/
Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [\App\Http\Controllers\JobController::class, 'create']);
    Route::post('/jobs/create', [\App\Http\Controllers\JobController::class, 'store']);
    Route::get('/jobs/edit/{job:id}', [\App\Http\Controllers\JobController::class, 'edit'])->can('update', 'job')->name('job.edit');
    Route::post('/jobs/edit/{job:id}', [\App\Http\Controllers\JobController::class, 'update'])->name('job.update');
    Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
});
/*****************************Guest Routes*****************************************/
Route::middleware('guest')->group(function (){
    Route::get('/register', [\App\Http\Controllers\RegisteredUserController::class, 'create']);
    Route::post('/register', [\App\Http\Controllers\RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});
