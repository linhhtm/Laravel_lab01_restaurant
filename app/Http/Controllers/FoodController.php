<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
	public function index()
	{
    	$foods = \App\Food::all();
     	return view('food.index', ['foods' => $foods]);
   }
   public function getFoodsSection($string)
   {

        $section = \App\Section::where('name', $string)->first();
        $foods = $section->foods;
        return view('food.index', ['foods' => $foods]);
   }

   public function show($id)
    {
        $food = \App\Food::find($id);

        return view('food.details',['food' => $food]);
    }
}
