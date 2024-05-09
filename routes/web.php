<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\TicketBenefitController;
use App\Http\Controllers\Admin\TicketCategoryController;

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
    return view('auth.login');
});

Route::get('/redirect', [RedirectController::class, 'index']);

Route::get('/customer/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index']);

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('ticket', TicketController::class)->parameters([
        'ticket' => 'id']);
    Route::resource('ticket-category', TicketCategoryController::class)->parameters([
        'ticket-category' => 'id']);
    Route::resource('ticket-benefit', TicketBenefitController::class)->parameters([
        'ticket-benefit' => 'id']);
    Route::resource('event', EventController::class)->parameters([
        'event' => 'id']);
    Route::resource('event-category', EventCategoryController::class)->parameters([
        'event-category' => 'id']);
    Route::resource('payment', PaymentController::class)->parameters([
        'payment' => 'id']);
    Route::resource('order', OrderController::class)->parameters([
        'order' => 'id']);
    Route::resource('artist', ArtistController::class)->parameters([
        'artist' => 'id']);
    Route::resource('ticket', TicketController::class)->parameters([
        'ticket' => 'id']);
    Route::resource('payment-method', PaymentController::class)->parameters([
        'payment-method' => 'id']);
});




require __DIR__.'/auth.php';
