<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/name', function () {
    $Name = DB::table('users')->pluck('email');
    return view('greeting', [
        'name' => $Name
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/obesity', [PageController::class, 'obesity']);
Route::get('/diabetes2', [PageController::class, 'diabetes2']);
Route::get('/bllod_pressure3', [PageController::class, 'bllod_pressure3']);
Route::get('/obesity_food1', [PageController::class, 'obesity_food1']);
Route::get('/obesity_food2', [PageController::class, 'obesity_food']);
Route::get('/calculator', [PageController::class, 'calculator']);

Route::get('/foodshow', [FoodController::class, 'index'])
    ->name('food.show');
Route::post('/foodupload', [FoodController::class, 'store'])->name('food.upload');



Route::get('/oldindex', function () {
    return view('oldindex');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/foodupload', [FoodController::class, 'create']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
