<?php

Route::group(['prefix' => 'apmprovinsi', 'middleware' => 'web'], function() {
    Route::get('/', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getIndex');
    Route::get('/list', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getList');
    Route::get('/detail/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@detailApmProvinsi');
    Route::get('/create', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@createApmProvinsi');
    Route::post('/create', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@createApmProvinsiSave');
    Route::get('/update/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@updateApmProvinsi');
    Route::post('/update/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getIndex');
    Route::post('/delete/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getIndex');
    Route::post('/activate/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getIndex');
    Route::post('/unactivate/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getIndex');
    Route::get('/getKota/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getKota');
    Route::get('/json/{id}/{va}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@json');
    Route::get('/export/{id}', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@export');
    Route::get('/getColumns', 'Satudata\Apmprovinsi\Http\Controllers\ApmProvinsiController@getColumns');
});
