<?php


namespace App\Forms\Forms;


use App\Forms\Fields\ChoiceField;
use App\Forms\Fields\TextInput;
use App\Models\RestaurantInfo;
use function Livewire\str;

class RestaurantForm extends BaseForm
{
    public function __construct($instance = NULL)
    {
        $this->fields = array(
            new TextInput('name', 'name', array(
                'max' => 255
            )),
            new ChoiceField('info_id', 'Restaurant Info', array(
                'choices' => $this->createChoices(RestaurantInfo::all())
            ))
        );
        parent::__construct($instance);
    }
}
