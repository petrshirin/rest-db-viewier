<?php


namespace App\Forms\Fields;


class DateField extends BaseField
{
    protected $inputVisibleTypes = 'type="date"';
    protected $rule = "date";

}
