<?php


namespace App\Forms\Fields;


class NumberField extends BaseField
{
    protected $inputVisibleTypes = 'type="numeric"';
    protected $rule = "numeric";
}
