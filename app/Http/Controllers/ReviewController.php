<?php

namespace App\Http\Controllers;

use App\Models\Lego;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $review = Review::where("userId",Auth::user()->id)->where("legoId",$request->code)->first();
        
        if($review==null){
            $rating = new Review($request->except('_token'));
            $rating->legoId=$request->code;
            $rating->userId=Auth::user()->id;
            $rating->save();
            
            $lego=Lego::find($request->code);
            
            return response()->json(["success"=>true,"rating"=>$lego->rating]);
        }
        
        return response()->json(["success"=>false]);
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
