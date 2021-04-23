<?php


namespace App\Forms\Forms;


use App\Forms\Fields\TextInput;

class RestaurantInfoForm extends BaseForm
{
    public function __construct($instance=NULL)
    {
        $this->fields = array(
            new TextInput('address', 'Address', array(
                'max' => 255
            )),
            new TextInput('phone', 'phone', array(
                'max' => 20
            ))
        );
        parent::__construct($instance);

    }
}
