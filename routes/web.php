<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\App;
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

Route::get('/{locale}', function (string $locale) {
    if(! in_array($locale,['en','es','fr'])){
        abort(400);
    }

    App::setLocale($locale);

    return view('welcome',['name'=>'William',
                            'value'=>6
                          ]);
});
