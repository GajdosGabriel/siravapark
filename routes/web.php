<?php

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


Route::get('/', 'PublicController@index')->name('index');
Route::get('/sk', 'PublicController@indexSK')->name('indexSK');
Route::get('/de', 'PublicController@indexDE')->name('indexDE');
Route::get('/nl', 'PublicController@indexNL')->name('indexNL');
Route::get('/holiday', 'PublicController@holiday')->name('holiday');
Route::get('/taborisko', 'PublicController@taborisko')->name('taborisko');
Route::get('/taborisko/{lang}', 'PublicController@taboriskoLang')->name('taborisko.lang');
Route::get('/holiday/sk', 'PublicController@holidaySK')->name('holidaySK');
Route::get('/privacy-policy/{lang?}', 'PublicController@pp')->name('pp');
Route::get('/glamping', 'PublicController@glamping')->name('sirava-park');

//Dočasná verzia odstránenei realese dropdow apratmánov
Route::prefix('/apartments')->name('re.apartments.')->group(function() {
    Route::get('/', 'REController@apartments')->name('index');
    Route::get('/ground', 'REController@apartments_ground')->name('ground');
    Route::get('/first-floor', 'REController@apartments_first')->name('first');
    Route::get('/penthouse', 'REController@apartments_penthouse')->name('penthouse');
});


Route::prefix('/real-estate')->name('re.')->group(function() {
    Route::get('/', 'REController@index')->name('index');
    Route::get('/sk', 'REController@indexSK')->name('indexSK');


//    Pôvodná verzia
//    Route::get('/terraced-houses', 'REController@terraced')->name('terraced');
//    Route::get('/semi-detached-houses', 'REController@semi')->name('semi');
//    Route::get('/standard-houses', 'REController@standard')->name('standard');
//    Route::get('/villas', 'REController@villas')->name('villas');
});

Route::get('/boulevard', 'PublicController@boulevard')->name('beachClub');
Route::get('/boulevard/sk', 'PublicController@boulevardSK');
Route::get('/thermal-spa', 'PublicController@spa')->name('spa');
Route::get('/thermal-spa/sk', 'PublicController@spaSK')->name('spaSK');
Route::get('/location', 'PublicController@location')->name('location');
Route::get('/contact', 'PublicController@contact')->name('contact');
//Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');

Route::post('/holiday', 'PublicPostController@holiday')->name('holiday');
Route::post('/sign-up', 'PublicPostController@sign_up')->name('sign-up');
Route::post('/contact', 'PublicPostController@contact')->name('contactPost');

Route::get('/test', 'PublicController@test');



// Public area
Route::name('public.')->group(function() {

// Robilo chybu Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');
    Route::get('/', 'PublicController@index')->name('home');
    Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');

    Route::name('certification.')->prefix('/certification')->group(function() {
        Route::get('/', 'CertificationController@index')->name('index');
        Route::get('/hnwi', 'CertificationController@hnwi')->name('hnwi');
        Route::get('/si', 'CertificationController@si')->name('si');
        Route::get('/ri', 'CertificationController@ri')->name('ri');

        Route::post('/submit', 'CertificationPostController@submit')->name('submit');
    });

    Auth::routes();
    Route::get('/login', 'PublicController@login')->name('login');
    Route::get('/login/sk', 'PublicController@loginSK')->name('loginSK');
    Route::get('/sign-up/{lang?}', 'PublicController@sign_up')->name('signUp');

});




// Order area
Route::name('order.')->prefix('/order')->group(function() {
//Route::name('order.')->middleware(['auth'])->prefix('/order')->group(function() {

    Route::get('/home', 'OrderController@home')->name('home');
    Route::get('/index', 'OrderController@index');
    Route::post('/store', 'OrderController@store')->name('store');

});

Auth::routes();
