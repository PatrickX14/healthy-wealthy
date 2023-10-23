<?php

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FoodController;
use App\Models\Food;
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

Route::get('/foods/{food}', function (Food $Food) {
    echo '<h1>' . $Food . '</h1>';
});

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return 'User ' . $id . ' ' . $name;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/obesity', [PageController::class, 'obesity']);
// Route::get('/diabetes2', [PageController::class, 'diabetes2']);
// Route::get('/bllod_pressure3', [PageController::class, 'bllod_pressure3']);
// Route::get('/obesity_food1', [PageController::class, 'obesity_food1']);
// Route::get('/obesity_food2', [PageController::class, 'obesity_food']);
// Route::get('/calculator', [PageController::class, 'calculator']);

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/diabetes2', 'diabetes2');
    Route::get('/bllod_pressure3', 'bllod_pressure3');
    Route::get('/obesity_food1', 'obesity_food1');
    Route::get('/obesity_food2', 'obesity_food');
    Route::get('/calculator', 'calculator');
});

Route::controller(FoodController::class)->group(function () {
    Route::get('/foodshow', 'index')->name('food.show');
    Route::post('/foodupload', 'storeFood');
});

Route::controller(DiseaseController::class)->group(function () {
    Route::get('/obesity', 'obesity');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/foodupload', [FoodController::class, 'create']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/oldindex', function () {
    return view('oldindex');
});

require __DIR__ . '/auth.php';
