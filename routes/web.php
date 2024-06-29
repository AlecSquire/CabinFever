<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cabins;

// Home route
Route::get('/', function () {
    return view('home');
});

// About route
Route::get('/about', function () {

    return view('about', []);
});

// cabins route
Route::get('/cabins', function ()  {
    return view ('cabins', ['cabins' =>  Cabins::all()]);
});

// Single cabin route
Route::get('/cabin/{id}', function ($id)  {

    $cabin_match = Cabins::find($id);
    return view('cabin', [    'cabin_match' => $cabin_match, 'movies' => Cabins::all('id') ]);

});

// Contact route
Route::get('/contact', function () {
    $contact_info = [
        'name' => 'Alec',
        'email' => 'alecsquire@gmail.com',
        'phone' => '555-555-5555',
        'address' => '123 Main St, Devon, UK',
    ];
    return view('contact', ['contact_info' => $contact_info]);
});


// // TV Shows route
// Route::get('/shows', function ()  {

//     return view('shows', ['shows' => null]);

// });
