<?php

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get(
        '/',
        [PagesController::class, 'home']
    )->name('root_path');

    Route::get(
        '/about',
        [PagesController::class, 'about']
    )->name('about_path');

    Route::get(
        '/contact',
        [ContactsController::class, 'create']
    )->name('contact_path');

    Route::post(
        '/contact',
        [ContactsController::class, 'store']
    )->name('contact_path');

    Auth::routes(['verify' => true]);

});


/*Route::get(
    '/test-email',
    function (){
        return new ContactMessageCreated(
            'Hilaire Happi',
            'mboasolutions@gmail.com',
            'juste un message pour essayer'
        );
    }
)->name('test-email_path');*/

//Route::get('/home', [HomeController::class, 'index'])->name('home');
