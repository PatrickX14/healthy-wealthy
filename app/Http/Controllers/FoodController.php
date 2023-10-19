<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('foodshow')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foodupload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foodname' => 'required',
            'foodkcal' => 'required',
            'foodcategory' => 'required',
            'foodingr' => 'required',
            'foodrecipe' => 'required',
            'video' => 'required',
            'picture' => 'required',
            'refer' => 'required'
        ], [
            'foodname.required' => 'โปรดระบุชื่ออาหาร',
            'foodkcal.required' => 'โปรดระบุปริมาณแคลอรี่',
            'foodcategory.required' => 'โปรดเลือกประเภทอาหาร',
            'foodingr.required' => 'โปรดระบุขั้นตอนการทำอาหาร',
            'foodrecipe.required' => 'โปรดเลือกประเภทอาหาร',
            'video.required' => 'โปรดเลือกประเภทอาหาร',
            'picture.required' => 'โปรดเลือกประเภทอาหาร',
            'refer.required' => 'โปรดเลือกประเภทอาหาร'
        ]);

        $upload = Food::create([
            'foodname' => $request->foodname,
            'foodkcal' => $request->foodkcal,
            'foodcategory' => $request->foodcategory,
            'foodingr' => $request->foodingr,
            'foodrecipe' => $request->foodrecipe,
            'video' => $request->video,
            'picture' => $request->picture,
            'refer' => $request->refer
        ]);
        if(!$upload) {
            return;
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
