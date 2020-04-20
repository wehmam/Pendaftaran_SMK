<?php

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



Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('pages.backend.dashboard');
    })->name('home');
    Route::get('/biodata', function () {

        $pendaftar = [
            'pendaftar1' => [101,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar2' => [102,"Ashari","Pilot",2016],
            'pendaftar3' => [103,"Riyo","Teknik Penerbang",2019],
            'pendaftar4' => [104,"Jiyara","Teknik Mesin Pesawat",2017],
            'pendaftar5' => [105,"Maul","Pilot",2016],
            'pendaftar6' => [106,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar7' => [107,"Rio Febrian","Teknik Penerbang",2019],
            'pendaftar8' => [108,"Syaifudin","Doro",2019],
            'pendaftar9' => [109,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar10' => [110,"Imam Maulana Ashari","Teknik Penerbang",2019],
        ];
        dd($pendaftar);
        return view('pages.backend.biodata');
    })->name('biodata');
    
});

