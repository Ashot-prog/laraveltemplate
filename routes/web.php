<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CandidateController;
use App\Http\Controllers\auth\RegisterController;
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
    return view('index');
});
Route::post('/create', function () {
    return view('auth.register');
});
Route::post('/add', [RegisterController::class, 'store'])->name('create');
Route::get('/jobs', function () {
    return view('frontend.candidate.job.show-job');
});
Route::get('/company', function () {
    return view('frontend.company.layouts.app');
});
Route::get('/category', function () {
    return view('frontend.company.layouts.app');
});
Route::prefix('admin')->group(function () {
    Route::get('/register', function () {
        return view('admin.candidate.create');
    });
    Route::get('/edit', function () {
        return view('admin.candidate.edit');
    });
    Route::get('/jobregister', function () {
        return view('admin.jobs.create');
    });
    Route::get('/companyregister', function () {
        return view('admin.company.create');
    });
    Route::get('/companyedit', function () {
        return view('admin.company.edit');
    });

    Route::post('/candidate', [CandidateController::class, 'store'])->name('candidateCreat');
});




