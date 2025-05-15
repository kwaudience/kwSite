

<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Auth\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

// je crée les route les enrégistrements des nouveaux clients dans la base de données
Route::get('/register', [ClientController::class, 'index'])->name('client.register.index');
Route::post('/register', [ClientController::class, 'store'])->name('client.register.store');


Route::get('/login', [AuthController::class, 'index'])
->name('auth.login');

Route::post('/login-connexion', [AuthController::class, 'login'])->name('auth.connexion');



Route::get('/', function () {
    return view(view: 'index');
})->name('index');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::prefix('/contact')->group(function () {
    Route::post('/sendEmail', action: [ContactController::class, 'sendEmail'])->name('contact.sendEmail');
});

Route::get('/actualite', function () {
    return view('actualites');
})->name('actualite');

Route::get('/equipes', function () {
    return view('equipes');
})->name('equipe');;

Route::prefix('service')->group(function () {
    Route::get('/gdas', function () {
        return view('services.GDAS');
    })->name('service.gdas');

    Route::get('/smp', function () {
        return view('services.smp');
    })->name('service.smp');

    Route::get('/formation', function () {
        return view('services.formation');
    })->name('service.formation');

    Route::get('/devweb', function () {
        return view('services.devweb');
    })->name('service.devweb');

    Route::get('/iwmp', function () {
        return view('services.IWMP');
    })->name('service.iwmp');

    Route::get('/architecture', function () {
        return view('services.architecture');
    })->name('service.architecture');

    Route::get('/gpi', function () {
        return view('services.GPI');
    })->name('service.gpi');

    Route::get('/cdn', function () {
        return view('services.cdn');
    })->name('service.cdn');

    Route::get('/infogerance', function () {
        return view('services.infogerance');
    })->name('service.infogerance');
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Routes de déconnexion
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    // Routes client
    Route::prefix('client')->middleware('role:client')->group(function () {
        Route::get('/', fn () => view('dashboard.client.customerspace'))->name('dashboard.client');
        Route::get('/compte', fn () => view('dashboard.client.moncompte'))->name('dashboard.moncompte');
        Route::get('/service', fn () => view('dashboard.client.messervices'))->name('dashboard.messervices');
        Route::get('/facture', fn () => view('dashboard.client.mesfactures'))->name('dashboard.mesfactures');
        Route::get('/adhesion', fn () => view('dashboard.client.demande_adhesion'))->name('dashboard.demande_adhesion');
        Route::get('/delete', fn () => view('dashboard.client.deletemessage'))->name('dashboard.deletemessage');
        Route::get('/annuler', fn () => view('dashboard.client.annuler_service'))->name('dashboard.annuler_service');
        Route::get('/customer', [ClientController::class, 'customerspace'])->name('client.customerspace')->name('dashboard.customerspace');
    });

    // Routes admin
    Route::prefix('admin')->group(function () {
        Route::get('/', fn () => view('dashboard.admin.admindashboard'))->name('dashboard.admin');
        Route::get('/deleteclient', fn () => view('dashboard.admin.deleteclient'))->name('dashboard.deleteclient');
        Route::get('/gestion', fn () => view('dashboard.admin.gestionclients'))->name(name: 'dashboard.gestionclients');
        Route::get('/gestion2', fn () => view('dashboard.admin.gestionclients2'))->name(name: 'dashboard.gestionclients2');
        Route::get('/moncompte', fn () => view('dashboard.admin.moncompte'))->name('dashboard.moncompte');
        Route::get('/valid', fn () => view('dashboard.admin.valid_demand'))->name('dashboard.valid_demand');
    });
});



