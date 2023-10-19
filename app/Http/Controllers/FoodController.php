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
        return view('food/foodupload');
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
            'disease' => 'required',
            'foodingr' => 'required',
            'foodrecipe' => 'required',
            'video' => 'required',
            'picture' => 'nullable',
            'refer' => 'required'
        ], [
            'foodname.required' => 'โปรดระบุชื่ออาหาร',
            'foodkcal.required' => 'โปรดระบุปริมาณแคลอรี่',
            'foodcategory.required' => 'โปรดเลือกหมวดหมู่',
            'disease.required' => 'โปรดเลือกโรค',
            'foodingr.required' => 'โปรดระบุขั้นตอนการทำอาหาร',
            'foodrecipe.required' => 'โปรดเลือกประเภทอาหาร',
            'video.required' => 'โปรดเพิ่มวิดีโอ',
            'picture.required' => 'โปรดเพิ่มรูป',
            'refer.required' => 'โปรดระบุแหล่งอ้างอิง'
        ]);

        $filename = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('image', $filename, 'public');

        $upload = Food::create([
            'foodname' => $request->foodname,
            'foodkcal' => $request->foodkcal,
            'foodcategory' => $request->foodcategory,
            'disease' => $request->disease,
            'foodingr' => $request->foodingr,
            'foodrecipe' => $request->foodrecipe,
            'video' => $request->video,
            'picture' => $request->picture->getClientOriginalName(),
            'refer' => $request->refer
        ]);
        // if(!$request->hasFile('picture')) {
        //     echo 'no file uploaded';
        // }else {
        //     echo 'file uploaded';
        // }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $foods = Food::find($id);
        return view('food/foodshow')->with('foods', $foods);
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
