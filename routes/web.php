<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomController;
use App\Http\Controllers\AboutController;
use App\Models\home_banner;
use App\Models\about_banner;
use App\Models\news;
use App\Models\contact;
use App\Models\location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteHomeProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Home routes
Route::get('/', function () {
    $home_banner = home_banner::all();
    return view('user.index',['home_banner' =>$home_banner]);
});

Route::get('/about', function () {
    $about_banner = about_banner::find($id=1);
    return view('user.about', ['about_banner'=>$about_banner]);
});

Route::get('/service', function () {
    return view('user.service');
});

Route::get('/news', function () {
    $admin_news=news::all();
    return view('user.blogs', ['admin_news'=>$admin_news]);
});

Route::get('/contact', function () {
    $admin_contact = contact::find($id=1);
    return view('user.contact', ['admin_contact'=>$admin_contact]); 
});

Route::get('/locaction', function () {
    $admin_location=location::all();
    return view('user.locaction', ['admin_location'=>$admin_location]);
});

Route::get('/tracking', function () {
    return view('user.tracking');
});

Route::get('/admin1', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/about_edit', function () {
    return view('admin.about_edit');
})->middleware('auth');

Route::get("/home-banner","App\Http\Controllers\HomController@index")->middleware('auth');
Route::post("/home-banner-add","App\Http\Controllers\HomController@store")->middleware('auth');
Route::get("/home-banner/{id}","App\Http\Controllers\HomController@show")->middleware('auth');
Route::get("/home-banner/{id}/edit","App\Http\Controllers\HomController@edit")->middleware('auth');
Route::put("/home-banner/{id}/update","App\Http\Controllers\HomController@update")->middleware('auth');
Route::get("/home-banner/{id}/delete","App\Http\Controllers\HomController@destroy")->middleware('auth');

Route::get("/admin-about","App\Http\Controllers\AboutController@index")->middleware('auth');
Route::post("/admin-about-add","App\Http\Controllers\AboutController@store")->middleware('auth');
Route::get("/admin-about/{id}","App\Http\Controllers\AboutController@show")->middleware('auth');
Route::get("/admin-about/{id}/edit","App\Http\Controllers\AboutController@edit")->middleware('auth');
Route::put("/admin-about/{id}/update","App\Http\Controllers\AboutController@update")->middleware('auth');
Route::get("/admin-about/{id}/delete","App\Http\Controllers\AboutController@destroy")->middleware('auth');

Route::get("/admin-news","App\Http\Controllers\NewsController@index")->middleware('auth');
Route::post("/admin-news-add","App\Http\Controllers\NewsController@store")->middleware('auth');
Route::get("/admin-news/{id}","App\Http\Controllers\NewsController@show")->middleware('auth');
Route::get("/admin-news/{id}/edit","App\Http\Controllers\NewsController@edit")->middleware('auth');
Route::put("/admin-news/{id}/update","App\Http\Controllers\NewsController@update")->middleware('auth');
Route::get("/admin-news/{id}/delete","App\Http\Controllers\NewsController@destroy")->middleware('auth');

Route::get("/admin-contact","App\Http\Controllers\ContactController@index")->middleware('auth');
Route::post("/admin-contact-add","App\Http\Controllers\ContactController@store")->middleware('auth');
Route::get("/admin-contact/{id}","App\Http\Controllers\ContactController@show")->middleware('auth');
Route::get("/admin-contact/{id}/edit","App\Http\Controllers\ContactController@edit")->middleware('auth');
Route::put("/admin-contact/{id}/update","App\Http\Controllers\ContactController@update")->middleware('auth');
Route::get("/admin-contact/{id}/delete","App\Http\Controllers\ContactController@destroy")->middleware('auth');

Route::get("/admin-location","App\Http\Controllers\LocationController@index")->middleware('auth');
Route::post("/admin-location-add","App\Http\Controllers\LocationController@store")->middleware('auth');
Route::get("/admin-location/{id}","App\Http\Controllers\LocationController@show")->middleware('auth');
Route::get("/admin-location/{id}/edit","App\Http\Controllers\LocationController@edit")->middleware('auth');
Route::put("/admin-location/{id}/update","App\Http\Controllers\LocationController@update")->middleware('auth');
Route::get("/admin-location/{id}/delete","App\Http\Controllers\LocationController@destroy")->middleware('auth');

Route::get("/admin-message","App\Http\Controllers\MessageController@index")->middleware('auth');
Route::post("/message-store","App\Http\Controllers\MessageController@store");
// Route::get("/admin-message","App\Http\Controllers\MessageController@show")->middleware('auth');
// Route::get("/admin-location/{id}/edit","App\Http\Controllers\LocationController@edit")->middleware('auth');
// Route::put("/admin-location/{id}/update","App\Http\Controllers\LocationController@update")->middleware('auth');
Route::get("/message-store/{id}/delete","App\Http\Controllers\MessageController@destroy")->middleware('auth');

Route::post("/tracking","App\Http\Controllers\TrackingController@tracking");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
