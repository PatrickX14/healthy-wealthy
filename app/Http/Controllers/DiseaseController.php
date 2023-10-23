<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function obesity()  {
        $foods = Food::where('disease', 'โรคอ้วน')->get();
        return view('diseasedetails.obesity', compact('foods'));
    }
}
