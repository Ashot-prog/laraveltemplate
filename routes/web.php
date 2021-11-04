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
Route::get('/blog', function () {
    return view('frontend.blog.blog');
});
Route::get('/contact', function () {
    return view('frontend.contact.index');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/jobregister', function () {
    return view('frontend.job.create');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/logining',function (){
    return view('index');
});
Route::get('/about',function (){
    return view('frontend.about.about');
});
Route::post('/add', [RegisterController::class, 'store'])->name('create');
Route::post('/add', [\App\Http\Controllers\JobController::class, 'store'])->name('addJob');
Route::get('/jobs', function () {
    return view('frontend.job.index');
});
Route::get('/company', function () {
    return view('frontend.company.layouts.app');
});
Route::get('/createresum', function () {
    return view('frontend.candidate.resume.add-resume');
});
Route::get('/myresume', function () {
    return view('frontend.candidate.resume.resume');
});
Route::get('/category', function () {
    return view('frontend.company.layouts.app');
});
Route::prefix('admin')->group(function () {
    Route::get('/', function (){
        return view('admin.dashboard');
    });
    Route::get('/register', function () {
        return view('admin.candidate.create');
    });
    Route::get('/edit', function () {
        return view('admin.candidate.edit');
    });
    Route::get('/jobregister', function () {
        return view('admin.jobs.create');
    });
    Route::get('/employers', function () {
        return view('admin.employers.index');
    });
    Route::get('/companyregister', function () {
        return view('admin.company.create');
    });
    Route::get('/companyedit', function () {
        return view('admin.company.edit');
    });

    Route::post('/candidate', [CandidateController::class, 'store'])->name('candidateCreat');
});




