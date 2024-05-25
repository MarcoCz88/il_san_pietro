<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PrenotaController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\AdminPrenotazioneController;

// ROTTE PUBBLICHE
// Route::get('/home',[FrontController::class, 'welcome'])->name('home');
Route::get('/',[FrontController::class, 'welcome'])->name('home');
Route::get('/menu',[DishController::class, 'showDish'])->name('dishes.show');
Route::get('/dovesiamo',[FrontController::class, 'dovesiamo'])->name('dovesiamo');
Route::get('/prodotti',[FrontController::class, 'prodotti'])->name('prodotti');
Route::get('/storia',[FrontController::class,'storia'])->name('storia');
Route::get('/promozioni',[PromotionController::class,'showPromotion'])->name('promotion.show');


Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');



// ROTTE PRENOTAZIONE
Route::get('/prenota', [PrenotaController::class, 'showForm'])->name('prenota.form');
Route::post('/prenota', [PrenotaController::class, 'submitForm'])->name('prenota.submit');

// ROTTE FORTIFY
Fortify::loginView(function () {
    return view('auth.login');
});


// ROTTE AMMINISTRATORE
// AGGIUNGERE/MODIFICARE/ELIMINARE PIATTO
Route::get('/nuovo/piatto',[DishController::class, 'addDish'])->middleware('auth')->name('dish.add');
Route::middleware(['auth',])->group(function () {
    Route::get('/admin/dashboard', [RevisorController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/{id}/edit', [RevisorController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/{id}/update', [RevisorController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}/delete', [RevisorController::class, 'destroy'])->name('admin.delete');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/prenotazioni', [AdminPrenotazioneController::class, 'index'])->name('admin.prenotazioni.index');
    Route::delete('/admin/prenotazioni/{id}/delete', [AdminPrenotazioneController::class, 'destroy'])->name('admin.prenotazioni.destroy');
});
// AGGIUNGERE/MODIFICARE/ELIMINARE PROMOZIONE
Route::get('/nuovo/promozione',[PromotionController::class, 'addPromotion'])->middleware('auth')->name('promotion.add');
Route::middleware(['auth',])->group(function () {
    Route::get('/admin/dashboardp', [RevisorController::class, 'indexP'])->name('admin.dashboardp');
    Route::get('/admin/{id}/editP', [RevisorController::class, 'editP'])->name('admin.editP');
    Route::post('/admin/{id}/updateP', [RevisorController::class, 'updateP'])->name('admin.updateP');
    Route::delete('/admin/{id}/deleteP', [RevisorController::class, 'destroyP'])->name('admin.deleteP');
});