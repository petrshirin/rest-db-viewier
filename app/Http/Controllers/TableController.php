<?php


namespace App\Http\Controllers;


use App\Forms\Forms\TableForm;
use App\Models\Table;

class TableController extends Controller
{
    protected $model = Table::class;
    protected $modelForm = TableForm::class;

}
