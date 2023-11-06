<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function obesity()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '9')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '9')->get();
        return view('diseasedetails/obesity', compact('foods', 'inedibleFood'));
    }

    public function diabetes()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '2')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '2')->get();
        return view('diseasedetails/diabetes', compact('foods', 'inedibleFood'));
    }

    // เอาชื่อมาจากโฟลเดอร์ diseasedetails ใส่ตามตัวอย่างข้างล่าง

    public function hypertension()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '7')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '7')->get();
        return view('diseasedetails/hypertension', compact('foods', 'inedibleFood'));
    }

    public function hyperlipidemia()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '6')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '6')->get();
        return view('diseasedetails/hyperlipidemia', compact('foods', 'inedibleFood'));
    }

    public function osteoarthritis()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '10')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '10')->get();
        return view('diseasedetails/osteoarthritis', compact('foods', 'inedibleFood'));
    }

    public function heart()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '5')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '5')->get();
        return view('diseasedetails/heart', compact('foods', 'inedibleFood'));
    }

    public function dementia()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '1')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '1')->get();
        return view('diseasedetails/dementia', compact('foods', 'inedibleFood'));
    }

    public function gout()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '4')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '4')->get();
        return view('diseasedetails/gout', compact('foods', 'inedibleFood'));
    }

    public function kidney()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '8')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '8')->get();
        return view('diseasedetails/kidney', compact('foods', 'inedibleFood'));
    }

    public function gastritis()
    {
        $foods = Food::where('foodcategory', 'edible')->where('diseases_id', '3')->get();
        $inedibleFood = Food::where('foodcategory', 'inedible')->where('diseases_id', '3')->get();
        return view('diseasedetails/gastritis', compact('foods', 'inedibleFood'));
    }
}
