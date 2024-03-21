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
Route::view('terms-conditions', 'pages.terms')->name('terms'); 
Route::view('privacy-policy', 'pages.privacy')->name('privacy'); 
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/private-sessions', [MainController::class, 'privateSessions'])->name('private.sessions');
Route::get('/retreats', [MainController::class, 'retreats'])->name('retreats');
Route::get('/sign-up-for-the-retreat', [MainController::class, 'signUp'])->name('retreat.signup');
Route::get('/host-a-retreat', [MainController::class, 'hostRetreat'])->name('host.retreat');
Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/events', [MainController::class, 'events'])->name('events');
Route::post('event-booking', [MainController::class, 'eventBooking'])->name('event.booking');
Route::post('store-retreat', [MainController::class, 'storeRetreat'])->name('store.retreat');
Route::post('store-service', [MainController::class, 'storeService'])->name('store.service');
Route::post('sign-up-for-the-retreat/{id}', [MainController::class, 'updateRetreat'])->name('retreat.update');
Route::get('/retreats/himalayan-bliss-odyssey', [MainController::class, 'himalayan'])->name('himalayan');
Route::get('/retreats/know-yourself-retreat-belgian-ardennes', [MainController::class, 'belgian'])->name('belgian');
//Yoga
Route::get('/services/yoga-practices', [MainController::class, 'yogaPractices'])->name('yoga.practices');
Route::get('/services/deeprest-chair-yoga', [MainController::class, 'deepestchairYoga'])->name('dc.yoga');
Route::get('/services/train-your-breath', [MainController::class, 'trainyoutbreathYoga'])->name('tyb.yoga');
Route::get('/services/yopi-training', [MainController::class, 'yopitrainingYoga'])->name('yopi.yoga');
Route::get('/services/foundational-yoga', [MainController::class, 'foundationalYoga'])->name('foundational.yoga');
Route::get('/services/yoga-therapy', [MainController::class, 'yogaTherapy'])->name('yoga.therapy');
Route::get('/services/trauma-sensitive-yoga', [MainController::class, 'traumaYoga'])->name('trauma.yoga');
//Ayu
Route::get('/services/ayurvedic-healthcare', [MainController::class, 'ayuHealthcare'])->name('ayu.healthcare');
//Body
Route::get('/services/body-fit-practices', [MainController::class, 'bodyFit'])->name('body.fit');
//Blog
Route::get('/blog/{slug}', [MainController::class, 'viewBlog'])->name('view.blog');
//Events
Route::get('/event/{date}/{slug}', [MainController::class, 'viewEvent'])->name('view.event');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/index', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/blogs', [HomeController::class, 'blogIndex'])->name('blog.index');
    Route::get('/events', [HomeController::class, 'eventIndex'])->name('event.index');
    Route::get('/event-bookings', [HomeController::class, 'eventBookings'])->name('event.bookings');
    Route::get('/retreat-bookings', [HomeController::class, 'retreatBookings'])->name('retreat.bookings');
    Route::get('/service-bookings', [HomeController::class, 'serviceBookings'])->name('service.bookings');
    Route::get('/blog/add', [HomeController::class, 'addBlog'])->name('add.blog');
    Route::get('/event/add', [HomeController::class, 'addEvent'])->name('add.event');
    Route::post('/blog/store', [HomeController::class, 'storeBlog'])->name('store.blog');
    Route::post('/event/store', [HomeController::class, 'storeEvent'])->name('store.event');
    Route::get('/blog/edit/{id}', [HomeController::class, 'editBlog'])->name('edit.blog');
    Route::get('/event/edit/{id}', [HomeController::class, 'editEvent'])->name('edit.event');
    Route::post('/blog/update/{id}',[HomeController::class, 'updateBlog'])->name('update.blog');
    Route::post('/event/update/{id}',[HomeController::class, 'updateEvent'])->name('update.event');
    Route::post('/event-booking/update/{id}',[MainController::class, 'updateEventbooking'])->name('update.eventbooking');
    Route::get('/blog/delete/{id}', [HomeController::class, 'deleteBlog'])->name('delete.blog');
    Route::get('/event/delete/{id}', [HomeController::class, 'deleteEvent'])->name('delete.event');
    Route::get('/event-bookings/delete/{id}', [HomeController::class, 'deleteEventbooking'])->name('delete.eventbooking');
    Route::get('/retreat-bookings/delete/{id}', [HomeController::class, 'deleteRetreatbooking'])->name('delete.retreatbooking');
    Route::get('/service-bookings/cancel/{id}', [HomeController::class, 'cancelService'])->name('cancel.service');
});
