<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function obesity(Food $food)
    {
        $food = Food::where('disease', 'โรคอ้วน')->get();
        return view('diseasedetails/obesity', compact('food'));
    }
}
