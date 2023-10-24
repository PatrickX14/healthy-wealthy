<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function obesity()  {
        $foods = Food::where('disease', 'โรคอ้วน')->get();
        return view('diseasedetails/obesity', compact('foods'));
    }

    public function diabetes()  {
        $foods = Food::where('disease', 'โรคเบาหวาน')->get();
        return view('diseasedetails/diabetes', compact('foods'));
    }

    // เอาชื่อมาจากโฟลเดอร์ diseasedetails ใส่ตามตัวอย่างข้างล่าง

    public function hypertension()  {
        $foods = Food::where('disease', 'โรคความดันโลหิตสูง')->get();
        return view('diseasedetails/hypertension', compact('foods'));
    }

    public function hyperlipidemia()  {
        $foods = Food::where('disease', 'โรคไขมันในเลือดสูง')->get();
        return view('diseasedetails/hyperlipidemia', compact('foods'));
    }

    public function osteoarthritis()  {
        $foods = Food::where('disease', 'โรคข้อเข่าเสือม')->get();
        return view('diseasedetails/osteoarthritis', compact('foods'));
    }

    public function heart()  {
        $foods = Food::where('disease', 'โรคหัวใจขาดเลือด')->get();
        return view('diseasedetails/heart', compact('foods'));
    }

    public function dementia()  {
        $foods = Food::where('disease', 'โรคสมองเสื่อม')->get();
        return view('diseasedetails/dementia', compact('foods'));
    }

    public function gout()  {
        $foods = Food::where('disease', 'โรคเก๊าท์')->get();
        return view('diseasedetails/gout', compact('foods'));
    }

    public function kidney()  {
        $foods = Food::where('disease', 'โรคไต')->get();
        return view('diseasedetails/kidney', compact('foods'));
    }

    public function gastritis()  {
        $foods = Food::where('disease', 'โรคกระเพาะ')->get();
        return view('diseasedetails/gastritis', compact('foods'));
    }

}
