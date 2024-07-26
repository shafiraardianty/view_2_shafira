<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('evaluasi/jawab/empat/jurusan',function ($jurusan) {
return view('soal satu.blade.php');
});

$profile = [
    'tkro'=>[
        'nama'=>'Teknik Kendaraan Ringan Otomotif',
        'kajur'=>'Rivan Indrayan.S>T',
        'kelas'=>6
    ],
    'tp'=>[
        'nama'=>'Teknik Permesinan',
        'kajur'=>'Siti Hamidah , A.Md',
        'kelas'=>5
    ],
    'rpl'=>[
        'nama'=>'Rekayasa Perangkat Lunak',
        'kajur'=>'Joko kristianto, S.T',
        'kelas'=>'3'
    ],
    'ak'=>[
        'nama'=>'Akutansi',
        'kajur'=>'Yuliati,S.E, M.M',
        'kelas'=>1
    ],
];


