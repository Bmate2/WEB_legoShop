<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lego;
use Illuminate\Http\Request;

class LegoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lego=Lego::paginate(10);
        return view('lego.all')->with(compact("lego")); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        UserController::checkAdmin();
        $categories=Category::all();
        return view("admin.lego.add",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'code' => 'required|unique:legos|max:255',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'pieces' => 'required|integer|min:0',
            'category' => 'required',
            'image' => 'required',
        ]);
        $imagePath = $request->file('image')->store('lego_images', 'public');


        Lego::create([
            'code' => $request->code,
            'name' => $request->name,
            'price' => $request->price,
            'pieces' => $request->pieces,
            'category_id' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('all_lego');
    }

    /**
     * Display the specified resource.
     */
    public function show($code)
    {
        $lego=Lego::where("code",$code)->first();
        return view("lego.show")->with(compact("lego"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($code)
    {
        $lego=Lego::where("code",$code)->first();
        $categories=Category::all();
        return view("lego.edit")->with(compact("lego","categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $code)
    {
        $allLego=Lego::all();
        $lego=Lego::where("code",$code)->first();
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'pieces' => 'required|integer|min:0',
            //'category' => 'required|exists:categories,id',
        ]);
    
        $lego->update($validatedData);
        return redirect()->route('all_lego');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($code)
    {
        $lego=Lego::where("code",$code)->first();
        $lego->delete();
        return redirect()->route('all_lego');
    }
    public function uploadImage(Request $request)
{
    
}
}