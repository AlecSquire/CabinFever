<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cabins;
use App\Models\Review;
use App\Models\Blog;

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
   $reviews_all = Review::all();
    $cabin_match = Cabins::find($id);
    return view('cabin', ['cabin_match' => $cabin_match, 'reviews_all' => $reviews_all]);

});
Route::get('/reviews', function () {
    $reviews_all = Review::all();
    return view('reviews', ['reviews' => $reviews_all]);
});

// Contact route
Route::get('/contact', function () {

    return view('contact', []);
});

// // Blogs route
// Route::get('/blogs', function () {
//     $blogs = Blog::all();
//     return view('blogs', ['blogs'=> $blogs]);
// });
