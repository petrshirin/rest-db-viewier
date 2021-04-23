<?php


namespace App\Http\Controllers;


use App\Forms\Forms\RestaurantInfoForm;
use App\Models\RestaurantInfo;

class RestaurantInfoController extends Controller
{
    protected $model = RestaurantInfo::class;
    protected $modelForm = RestaurantInfoForm::class;
}
