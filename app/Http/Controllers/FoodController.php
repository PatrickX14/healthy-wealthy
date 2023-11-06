<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Disease;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('food/foodshow')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diseases = Disease::all();
        return view('dashboardfoodupload', compact('diseases'));
    }

    public function indexSearch(Request $request)
    {
        $food = Food::all();
        return view('search', compact('food'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        // $food = Food::where(function ($query) use ($search) {
        //     $query->where('foodname', 'like', "%$search%")
        //         ->orWhereHas('diseases->name', 'like', "%$search%");
        // })->get();
        $food = Food::where(function($query) use ($search){
            $query->where('foodname', 'like', "%$search%")
            ->orWhere('foodkcal', 'like', "%$search%");
        })
        ->orWhereHas('diseases', function($query) use ($search){
            $query->where('name', 'like', "%$search%");
        })->get();
        return view('search', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'foodname' => 'required',
            'foodkcal' => 'required',
            'foodcategory' => 'required',
            'diseases_id' => 'required',
            'foodingr' => 'required',
            'foodrecipe' => 'required',
            'video' => 'required',
            'picture' => 'nullable',
            'refer' => 'required'
        ], [
            'foodname.required' => 'โปรดระบุชื่ออาหาร',
            'foodkcal.required' => 'โปรดระบุปริมาณแคลอรี่',
            'foodcategory.required' => 'โปรดเลือกหมวดหมู่',
            'diseases_id.required' => 'โปรดเลือกโรค',
            'foodingr.required' => 'โปรดระบุขั้นตอนการทำอาหาร',
            'foodrecipe.required' => 'โปรดเลือกประเภทอาหาร',
            'video.required' => 'โปรดเพิ่มวิดีโอ',
            'picture.required' => 'โปรดเพิ่มรูป',
            'refer.required' => 'โปรดระบุแหล่งอ้างอิง'
        ]);

        if (!$validate) {
            return;
        } else {
            $food = new Food;
            $food->foodname = $request->foodname;
            $food->foodkcal = $request->foodkcal;
            $food->foodcategory = $request->foodcategory;
            $food->diseases_id = $request->diseases_id;
            $food->foodingr = $request->foodingr;
            $food->foodrecipe = $request->foodrecipe;
            $food->video = $request->video;
            $food->picture = $request->picture->getClientOriginalName();
            $food->refer = $request->refer;
            $food->save();
            $request->file('picture')->storeAs('image', $request->picture->getClientOriginalName(), 'public');
        }

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = Food::find($id);
        return view('foodshow', compact('food'));
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
        $validate = $request->validate([
            'foodname' => 'required',
            'foodkcal' => 'required',
            'foodcategory' => 'required',
            'diseases_id' => 'required',
            'foodingr' => 'required',
            'foodrecipe' => 'required',
            'video' => 'required',
            'picture' => 'nullable',
            'refer' => 'required'
        ], [
            'foodname.required' => 'โปรดระบุชื่ออาหาร',
            'foodkcal.required' => 'โปรดระบุปริมาณแคลอรี่',
            'foodcategory.required' => 'โปรดเลือกหมวดหมู่',
            'diseases_id.required' => 'โปรดเลือกโรค',
            'foodingr.required' => 'โปรดระบุขั้นตอนการทำอาหาร',
            'foodrecipe.required' => 'โปรดเลือกประเภทอาหาร',
            'video.required' => 'โปรดเพิ่มวิดีโอ',
            'picture.required' => 'โปรดเพิ่มรูป',
            'refer.required' => 'โปรดระบุแหล่งอ้างอิง'
        ]);

        if (!$validate) {
            return;
        } else {
            $food = Food::find($id);
            $food->foodname = $request->foodname;
            $food->foodkcal = $request->foodkcal;
            $food->foodcategory = $request->foodcategory;
            $food->diseases_id = $request->diseases_id;
            $food->foodingr = $request->foodingr;
            $food->foodrecipe = $request->foodrecipe;
            $food->video = $request->video;
            if ($request->has('picture')) {
                $food->picture = $request->picture->getClientOriginalName();
                $request->file('picture')->storeAs('image', $request->picture->getClientOriginalName(), 'public');
            } else {
                $food->picture = null;
            }
            $food->refer = $request->refer;
            $food->update($request->all());
        }
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::find($id);
        $food->destroy($id);
        return redirect('/dashboard');
    }
}
