<?php


namespace App\Http\Controllers;


use App\Forms\Forms\OrderForm;
use App\Models\Order;

class OrderController extends Controller
{
    protected $model = Order::class;
    protected $modelForm = OrderForm::class;
}
