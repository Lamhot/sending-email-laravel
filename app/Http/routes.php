<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
    // "emails.hello" adalah nama view.
    $data = ['prize' => 'Peke', 'total' => 3 ];

    // "emails.hello" adalah nama view pada folder emails.hello.
    Mail::send('emails.hello', $data, function($pesan) {
        $pesan->to('silalahilasma@gmail.com', 'Lamhot JM Siagian')->subject('Selamat datang di Laravel!');
        // Copy carbon dikirimkan ke email lestaritambunan56@gmail.com
        // dengan nama penerima Lestari Tambunan
        $pesan->cc('lestaritambunan56@gmail.com', 'Lestari Tambunan');


    });
});