<?php

use App\Http\Controllers\BandController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\SonglistController;
use App\Http\Controllers\UdemyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/gigs', [GigController::class, 'index']);
Route::get('/contact', function () {
    $metaTitle = 'Contact me for bookings, questions or requests';
    $desc = 'Write me an email to book a lesson, a show or ask to me a question';

    return view('frontend.contact', compact('metaTitle'));
});
Route::get('/music', [MusicController::class, 'index']);
Route::get('/lessons', function () {
    return view('frontend.lessons.index');
});
Route::get('/lessons/songlist', [SonglistController::class, 'index'])->name('songlist');
Route::get('/lessons/udemy', [UdemyController::class, 'index'])->name('udemy');
Route::get('/lessons/private', function () {
    $metaTitle = 'Private Guitar Lessons';
    $desc = 'Book a privat online guitar lessons with me by writing me an email. The first lesson is free';

    return view('frontend.lessons.skype', compact('metaTitle', 'desc'));
})->name('private');

Route::get('/bands', [BandController::class, 'index']);

Route::get('/impressum', function () {
    $metaTitle = 'Impressum';
    $desc = 'Impressum of the Randy Rich Website';

    return view('frontend.impressum', compact('metaTitle', 'desc'));
});
Route::get('/udemy', function () {
    return redirect()->route('udemy');
});

Route::get('/dylan', function () {
return view('frontend.dylan');
});
Route::post('/codes', [CodeController::class, 'checkCode']);
Route::get('/download-sounds/{sound}', [CodeController::class, 'downloadSoundFiles'])->name('download-sounds');
Route::get('/confirm-download', [CodeController::class, 'confirmDownload']);
