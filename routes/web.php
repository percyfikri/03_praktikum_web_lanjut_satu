<?php

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

Route::get('/home', function () {
    return view('home');
    });

Route::get('/product', function () {
    return view('home');
    });
    


//example example example
Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });

    Route::prefix('product')->group(function (){
        Route::get('/category/marbel-edu-games', function(){
            return view('product');
        });
        Route::get('category/kolak-kids-songs', function(){
                return redirect('https://www.educastudio.com/category/kolak-kids-songs');
            });
            Route::get('category/riri-story-books', function(){
                return redirect('https://www.educastudio.com/category/riri-story-books');
            });
            Route::get('category/kolak-kids-songs', function(){
                return redirect('https://www.educastudio.com/category/kolak-kids-songs');
            });
    });

    // 

//Route Param
Route::get('/news', function(){
    return view('news');
});



//Route Prefix
Route::prefix('program')->group(function (){
    Route::get('program/karir', function(){
        return view('program');
    });
    // Route::get('program/magang', function(){
    //     return redirect('https://www.educastudio.com/program/magang');
    // });
    // Route::get('program/kunjungan-industri', function(){
    //     return redirect('https://www.educastudio.com/program/kunjungan-industri');
    // });
});