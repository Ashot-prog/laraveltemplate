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
})->name('/');
Route::get('/blog', function () {
    return view('frontend.blog.blog');
});
Route::get('/contact', function () {
    return view('frontend.contact.index');
});
Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class,'create']);
Route::post('/candidateCreat',[\App\Http\Controllers\Auth\RegisterController::class,'store']);
Route::get('/candidate',[\App\Http\Controllers\Auth\RegisterController::class,'index']);
Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,'index']);
Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::post('/logining',[\App\Http\Controllers\Auth\LoginController::class,'login']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::post('/add', [RegisterController::class, 'store'])->name('create');
Route::post('/add', [\App\Http\Controllers\JobController::class, 'store'])->name('addJob');
Route::get('/jobs', [\App\Http\Controllers\JobController::class, 'index'])->name('jobs');
Route::post('/createresum', [\App\Http\Controllers\ResumeController::class, 'create'])->name('createresume');
Route::get('/myresume', [\App\Http\Controllers\ResumeController::class, 'index'])->name('resume');
Route::get('/favoritejob', [\App\Http\Controllers\FavoriteJobController::class, 'store']);
Route::prefix('company')->group(function () {
    Route::get('/register',[\App\Http\Controllers\CompanyController::class, 'create'])->name('company');
    Route::post('/',[\App\Http\Controllers\CompanyController::class, 'store']);
    Route::post('/jobregister',[\App\Http\Controllers\JobController::class,'create']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', function (){
        return view('admin.dashboard');
    });
    Route::get('/jobs',[\App\Http\Controllers\JobController::class,'index']);
    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/company', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company');

});




