<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Route;

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
