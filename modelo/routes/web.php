<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return 'Boa Noite';
});

Route::get('/dia', function () {
    return 'Bom Dia';
});

Route::get('/nova', function () {
    return 'welcome';
});

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return 'area inicial';
    });

    Route::get('/contabil', function () {
        return 'area contabel';
    });
    Route::get('/relatorios', function () {
        return 'relatorios';
    });

});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'area inicial';
    });

    Route::get('/contabil', function () {
        return 'area contabel';
    });
    Route::get('/relatorios', function () {
        return 'relatorios';
    });

});