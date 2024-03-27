<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

// ricerca annuncio
Route::get('/annuncio/ricerca', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');

Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

Route::group(['prefix' => 'annunci'], function () {

    //crea annuncio
    Route::get('nuovo/{category?}', [AnnouncementController::class, 'createAnnouncement'])->name('announcements.create');

    Route::get('dettaglio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

    Route::get('tutti', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

    // Accetta annuncio
    Route::patch('accetta/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

    // Rifiuta annuncio
    Route::patch('rifiuta/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

    Route::patch('removeAnnouncement/{announcement}', [RevisorController::class, 'removeAnnouncement'])->middleware('isRevisor')->name('announcement.remove');

    // annunci rifiutati
    Route::patch('/revisor/recheck/{announcement}', [RevisorController::class, 'recheckAnnouncement'])->middleware('isRevisor')->name('revisor.recheck_announcement');
});

Route::group(['prefix' => 'revisor'], function () {
    // Index revisore
    Route::get('index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');


    //Richiedi di diventare revisore
    Route::get('richiesta', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor.become');

    //Invio della email per la richiesta di revisione
    Route::post('sendRevisor', [RevisorController::class, 'sendRevisor'])->middleware('auth')->name('revisor.send');

    //Rendi utente revisore
    Route::get('richiesta/{user}', [RevisorController::class, 'makeRevisor'])->name('revisor.make');
});

//* Cambio Lingua
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setLocale');




Route::post('/comments/store', [CommentsController::class, 'store'])->name('comments.store');





