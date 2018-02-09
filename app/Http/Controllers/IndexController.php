<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PhyscialActivity;
use App\Models\Products;
use App\Models\EveryDay;
use View;

class IndexController extends Controller
{
    
    public function __construct()
    {

    }

    public function index(){
    	$activityData = PhyscialActivity::orderBy('id')->get();
    	$meatData = Products::where("diet_category_id",MEAT)->select("name","id")->get();
    	$veggiesData = Products::where("diet_category_id",VEGETABLES)->select("name","id")->get();
    	$fruitsData = Products::where("diet_category_id",FRUITS)->select("name","id")->get();
    	$productsData = Products::where("diet_category_id",PRODUCT)->select("name","id")->get();
    	$dailyRoutineData = EveryDay::orderBy("id")->get();
    	return View::make("home/home")->with(array('activityData'=>$activityData, 'meatData' => $meatData, 'veggiesData' =>$veggiesData, 'fruitsData' =>$fruitsData, 'productsData' => $productsData,'dailyRoutineData' =>$dailyRoutineData));
    }
}
