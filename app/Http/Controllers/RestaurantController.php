<?php


namespace App\Http\Controllers;


use App\Forms\Forms\RestaurantForm;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    protected $model = Restaurant::class;
    protected $modelForm = RestaurantForm::class;
}
