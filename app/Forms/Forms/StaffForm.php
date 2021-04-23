<?php


namespace App\Forms\Forms;


use App\Forms\Fields\ChoiceField;
use App\Forms\Fields\TextInput;
use App\Models\Position;

class StaffForm extends BaseForm
{
    public function __construct($instance=NULL)
    {
        $this->fields = array(
            new TextInput('FIO', 'FIO', array(
                'max' => 255
            )),
            new TextInput('phone', 'phone', array(
                'max' => 20
            )),
            new ChoiceField('position_id', 'Position', array(
                'choices' => $this->createChoices(Position::all())
            ))
        );
        parent::__construct($instance);
    }

}
