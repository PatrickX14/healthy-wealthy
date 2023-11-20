<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class PageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $gender = $user->gender;
            $birthdate = $user->birthdate;
            return view("index", compact("gender", "birthdate"));
        }
        return view("index");
    }

    public function obesity()
    {
        return view('diseasedetails/odesity');
    }

    public function diabetes2()
    {
        return view('disease/diabetes2');
    }

    public function blood_pressure3()
    {
        return view('disease/blood_pressure3');
    }

    public function obesity_food1()
    {
        return view('food/obesity_food1');
    }

    public function obesity_food2()
    {
        return view('disease/obesity_food2');
    }
    public function calculator()
    {
        return view('calculator');
    }
    public function nutrition()
    {
        return view('nutrition');
    }
    public function disease()
    {
        return view('diseaselist');
    }
    public function foodshow()
    {
        return view('foodshow');
    }
}
