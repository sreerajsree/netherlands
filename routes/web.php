<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();
Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/private-sessions', [MainController::class, 'privateSessions'])->name('private.sessions');
Route::get('/retreats', [MainController::class, 'retreats'])->name('retreats');
Route::get('/sign-up-for-the-retreat', [MainController::class, 'signUp'])->name('retreat.signup');
Route::get('/host-a-retreat', [MainController::class, 'hostRetreat'])->name('host.retreat');
Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/retreats/himalayan-bliss-odyssey', [MainController::class, 'himalayan'])->name('himalayan');
Route::get('/retreats/know-yourself-retreat-belgian-ardennes', [MainController::class, 'belgian'])->name('belgian');
Route::get('/blog/{slug}', [MainController::class, 'viewBlog'])->name('view.blog');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/index', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/blog/add', [HomeController::class, 'addBlog'])->name('add.blog');
    Route::post('/blog/store', [HomeController::class, 'storeBlog'])->name('store.blog');
    Route::get('/blog/edit/{id}', [HomeController::class, 'editBlog'])->name('edit.blog');
    Route::post('/blog/update/{id}',[HomeController::class, 'updateBlog'])->name('update.blog');
    Route::get('/blog/delete/{id}', [HomeController::class, 'deleteBlog'])->name('delete.blog');
});
