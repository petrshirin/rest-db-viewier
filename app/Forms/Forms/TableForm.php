<?php


namespace App\Forms\Forms;


use App\Forms\Fields\NumberField;

class TableForm extends BaseForm
{
    public function __construct($instance = NULL)
    {
        $this->fields = array(
            new NumberField('number', 'Number'),
            new NumberField('status', 'Status'),
        );
        parent::__construct($instance);
    }

}
