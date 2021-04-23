<?php


namespace App\Forms\Forms;


use App\Forms\Fields\BaseField;
use App\Forms\Fields\DecimalField;
use App\Forms\Fields\TextInput;

class PositionForm extends BaseForm
{

    public function __construct($instance=NULL)
    {
        $this->fields = array(
            new TextInput('name', 'Name', array(
                'max' => 255
            )),
            new DecimalField('celery', 'celery', array(
                "minValue" => 1,
                "decimalPlaces" => 2
            ))
        );
        parent::__construct($instance);

    }
}
