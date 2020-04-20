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
        $teknikPenerbang = [
            'pendaftar1' => [101,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar2' => [103,"Riyo","Teknik Penerbang",2019],
            'pendaftar3' => [106,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar4' => [107,"Rio Febrian","Teknik Penerbang",2019],
            'pendaftar5' => [109,"Andy","Teknik Penerbang",2019],
            'pendaftar6' => [110,"hardiyanto","Teknik Penerbang",2019],
        ];
        $pilot = [
            'pendaftar7' => [301,"Ashari","Pilot",2016],
            'pendaftar8' => [302,"Jiyara","Pilot",2017],
            'pendaftar9' => [303,"Maul","Pilot",2016],
            'pendaftar10' => [304,"Syaifudin","Pilot",2019],
            'pendaftar11' => [304,"Syaifudin","Pilot",2019],
        ];
        $teknikMesin = [
        
            'pendaftar12' => [212,"Anjar","Teknik Mesin",2016],
            'pendaftar13' => [214,"Anjay","Teknik Mesin",2017],
            'pendaftar14' => [215,"Aidar","Teknik Mesin",2016],
            'pendaftar15' => [216,"Aigokil","Teknik Mesin",2019],
            
        ];
        $jurusan = $teknikPenerbang + $pilot + $teknikMesin;
        
        return view('pages.backend.dashboard',compact('teknikPenerbang','pilot','teknikMesin','jurusan'));
    })->name('home');
    Route::get('/biodata', function () {

        $teknikPenerbang = [
            'pendaftar1' => [101,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar2' => [103,"Riyo","Teknik Penerbang",2019],
            'pendaftar3' => [106,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar4' => [107,"Rio Febrian","Teknik Penerbang",2019],
            'pendaftar5' => [109,"Andy","Teknik Penerbang",2019],
            'pendaftar6' => [110,"hardiyanto","Teknik Penerbang",2019],
        ];
        $pilot = [
            'pendaftar7' => [301,"Ashari","Pilot",2016],
            'pendaftar8' => [302,"Jiyara","Pilot",2017],
            'pendaftar9' => [303,"Maul","Pilot",2016],
            'pendaftar10' => [304,"Syaifudin","Pilot",2019],
        ];
        $teknikMesin = [
        
            'pendaftar11' => [212,"Anjar","Teknik Mesin",2016],
            'pendaftar12' => [214,"Anjay","Teknik Mesin",2017],
            'pendaftar13' => [215,"Aidar","Teknik Mesin",2016],
            'pendaftar14' => [216,"Aigokil","Teknik Mesin",2019],
            
        ];
        $pendaftar = $teknikPenerbang + $pilot + $teknikMesin;
        // dd($pendaftar);
        return view('pages.backend.biodata')->with('daftar',$pendaftar);
    })->name('biodata');

    Route::get('/jurusan', function () {

        $teknikPenerbang = [
            'pendaftar1' => [101,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar2' => [103,"Riyo","Teknik Penerbang",2019],
            'pendaftar3' => [106,"Imam Maulana Ashari","Teknik Penerbang",2019],
            'pendaftar4' => [107,"Rio Febrian","Teknik Penerbang",2019],
            'pendaftar5' => [109,"Andy","Teknik Penerbang",2019],
            'pendaftar6' => [110,"hardiyanto","Teknik Penerbang",2019],
        ];
        $pilot = [
            'pendaftar7' => [301,"Ashari","Pilot",2016],
            'pendaftar8' => [302,"Jiyara","Pilot",2017],
            'pendaftar9' => [303,"Maul","Pilot",2016],
            'pendaftar10' => [304,"Syaifudin","Pilot",2019],
        ];
        $teknikMesin = [
        
            'pendaftar11' => [212,"Anjar","Teknik Mesin",2016],
            'pendaftar12' => [214,"Anjay","Teknik Mesin",2017],
            'pendaftar13' => [215,"Aidar","Teknik Mesin",2016],
            'pendaftar14' => [216,"Aigokil","Teknik Mesin",2019],
            
        ];
        $jurusan = $teknikPenerbang + $pilot + $teknikMesin;
        // dd($jurusan);
        return view('pages.backend.jurusan',compact('teknikPenerbang','pilot','teknikMesin'))->with('daftar',$jurusan);
    })->name('jurusan');
    
});

