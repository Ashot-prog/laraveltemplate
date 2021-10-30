<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CandidateController;
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
Route::get('/register', function () {
    return view('admin.candidate.create');
});
Route::get('/jobregister', function () {
    return view('admin.jobs.create');
});
Route::get('/companyregister', function () {
    return view('admin.company.create');
});
Route::get('/jobs', function () {
    return view('admin.jobs.show');
});
Route::get('/company', function () {
    return view('admin.company.index');
});

Route::post('/candidate', [CandidateController::class, 'store'])->name('candidateCreat');


//Route::group([ 'prefix' => 'admin'], function () {
//
//    Route::get('/candidate', [CandidateController::class, 'store']);
//    Route::resource('jobs', 'JobsController');
//});
