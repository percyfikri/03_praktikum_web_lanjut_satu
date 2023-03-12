<?php

use App\Http\Controllers\Coba;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();


// Route::get('home', function(){
//     // return redirect('https://www.educastudio.com');
//     return redirect

// });


//example example example
Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });


//HOME
Route::get('/home', function () {
    return view('home');
    });

//PRODUCTS
Route::prefix('product')->group(function (){
    Route::get('/category/marbel-edu-games', function(){
        return view('productMarbel');
    });
    Route::get('category/kolak-kids-songs', function(){
            return view('productKolak');
        });
});

//NEWS
//Route Param
    Route::get('/news', function(){
        return view('news');
    });
    Route::get('news/{title}', function($title){
        return view('newsP'.$title);
        //educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19
    });


//PROGRAM
//Route Prefix
Route::prefix('program')->group(function (){
    Route::get('/program/karir', function(){
        return view('programKarir');
    });
    Route::get('/program/magang', function(){
        return view('programMagang');
    });
});

//ABOUT US
//Route Biasa
Route::get('/about-us', function(){
    return view('about-us'); 
 });

//  CONTACT US
// Route resource
//Route Resouce-only
Route::resource('/contact-us', Coba::class)->only([
    'index',
    'create'
]);