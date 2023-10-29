<?php

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Food;

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
    $foodlist = Food::all();
    return view('dashboard', compact('foodlist'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/obesity', [PageController::class, 'obesity']);
// Route::get('/diabetes2', [PageController::class, 'diabetes2']);
// Route::get('/bllod_pressure3', [PageController::class, 'bllod_pressure3']);
// Route::get('/obesity_food1', [PageController::class, 'obesity_food1']);
// Route::get('/obesity_food2', [PageController::class, 'obesity_food']);
Route::get('/calculator', [PageController::class, 'calculator']);
Route::get('/nutrition', [PageController::class, 'nutrition']);
Route::get('/diseaslist', [PageController::class, 'disease']);

Route::controller(DiseaseController::class)->group(function(){
    Route::get('/obesity', 'obesity');
    Route::get('/diabetes', 'diabetes');
    Route::get('/hypertension', 'hypertension');
    Route::get('/hyperlipidemia', 'hyperlipidemia');
    Route::get('/osteoarthritis', 'osteoarthritis');
    Route::get('/heart', 'heart');
    Route::get('/dementia', 'dementia');
    Route::get('/gout', 'gout');
    Route::get('/kidney', 'kidney');
    Route::get('/gastritis', 'gastritis');
});

Route::get('/newindex', function(){
    return view('newindex');
});

Route::get('/foodshow', [FoodController::class, 'index'])->name('food.show');

Route::post('/foodupload', [FoodController::class, 'store']);

Route::get('/oldindex', function () {
    return view('oldindex');
});

Route::get('/exercisedetails', function () {
    return view('exercise/exercisedetails');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/foodupload', [FoodController::class, 'create']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
