<?php

use App\Http\Controllers\StageController;
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
Route::middleware('auth')->group(function () {
    Route::resource('stage', StageController::class);
});
Route::get('/', function () {
    return view('tasks');
})->middleware(['auth'])->name('tasks');


require __DIR__.'/auth.php';
