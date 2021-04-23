<?php


namespace App\Forms\Forms;


use App\Forms\Fields\ChoiceField;
use App\Forms\Fields\ManyChoiceField;
use App\Forms\Fields\NumberField;
use App\Models\Staff;
use App\Models\Table;

class WaiterForm extends BaseForm
{
    public function __construct($instance = null)
    {
        $initial = [];
        if ($instance) {
            foreach ($instance->tables as $table) {
                array_push($initial, $table->id);
            }
        }

        $this->fields = array(
            new ChoiceField('staff_id', 'Staff', array(
                'choices' => $this->createChoices(Staff::all())
            )),
            new ManyChoiceField('tables', 'Tables', array(
                'initial' => $initial,
                'choices' => $this->createChoices(Table::all())
            ))
        );
        parent::__construct($instance);
    }
}
