<?php
//inicio
Route::get('/', function () {
    return view('index');
});
//demas paginas del sitio de de care
Route::get('nosotros', function () {
    return view('templates.nosotros');
});
Route::get('contacto', function () {
    return view('templates.contacto');
});

Route::get('servicios', function () {
    return view('templates.servicios');
});

Route::get('calendario-de-eventos', function () {
    return view('templates.calendario');
});
Route::get('navegacion', function () {
    return view('partials.navegacion');
});

Route::get('hardware', function () {
    return view('templates.hardware');
});

