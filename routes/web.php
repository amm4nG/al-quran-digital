<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    $response = Http::get('https://equran.id/api/v2/surat');
    $surat = $response->json()['data'];
    // dd($surat);
    return view('welcome', compact(['surat']));
});

Route::get('/detail/{id}', function ($id) {
    $response = Http::get('https://equran.id/api/v2/surat/'.$id);
    $ayat = $response->json()['data'];
    // dd($ayat);
    return view('detail', compact(['ayat']));
});
