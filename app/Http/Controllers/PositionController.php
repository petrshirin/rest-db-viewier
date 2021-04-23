<?php

namespace App\Http\Controllers;

use App\Forms\Forms\PositionForm;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    protected $model = Position::class;
    protected $modelForm = PositionForm::class;


}
