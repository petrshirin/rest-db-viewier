<?php


namespace App\Http\Controllers;


use App\Forms\Forms\StaffForm;
use App\Models\Staff;

class StaffController extends Controller
{
    protected $model = Staff::class;
    protected $modelForm = StaffForm::class;
}
