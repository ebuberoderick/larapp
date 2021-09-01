<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PageController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/make-post', [PageController::class, 'create_post'])->name('make_post');
    Route::get('/manage-post', [PageController::class, 'view_category'])->name('categories');


    Route::prefix('posts')->group(function () {
        Route::post('/add-category', [PostController::class, 'add_category']);
        Route::post('/add-post', [PostController::class, 'add_post'])->name('add_post');
        Route::get('/read-post/{post_id}', [PageController::class, 'view_post'])->name('view_post');
    });
});


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
