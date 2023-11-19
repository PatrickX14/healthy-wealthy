<?php

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FoodController;
use App\Models\Disease;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PageController::class, "index"])->name("index");

Route::get('/dashboard', function () {
    $foodlist = Food::paginate(10);
    return view('dashboard', compact('foodlist'));
})->middleware(['auth', 'verified', 'checkuserrole'])->name('admindashboard');

Route::get('/dashboardfoodshow/{id}', function (string $id) {
    $foodlist = Food::find($id);
    $diseases = Disease::all();
    return view('dashboardfoodshow', compact('foodlist', 'diseases'));
})->middleware(['auth', 'verified'])->name('dashboardfoodshow');

// Route::get('/obesity', [PageController::class, 'obesity']);
// Route::get('/diabetes2', [PageController::class, 'diabetes2']);
// Route::get('/bllod_pressure3', [PageController::class, 'bllod_pressure3']);
// Route::get('/obesity_food1', [PageController::class, 'obesity_food1']);
// Route::get('/obesity_food2', [PageController::class, 'obesity_food']);

Route::controller(PageController::class)->group(function () {
    Route::get('/calculator', 'calculator');
    Route::get('/nutrition', 'nutrition');
    Route::get('/diseaslist', 'disease');
});

Route::controller(DiseaseController::class)->group(function () {
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

Route::controller(FoodController::class)->group(function () {
    Route::get('/foodlist', 'index')->name('food.show');
    Route::post('/foodupload', 'store');
    Route::get('/foodshow/{id}', 'show');
    Route::get('/searchpage', 'indexsearch');
    Route::get('/search', 'search');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/foodupload', [FoodController::class, 'create']);
    Route::patch('/foodedit/{id}', [FoodController::class, 'update']);
    Route::delete('/fooddelete/{id}', [FoodController::class, 'destroy']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
