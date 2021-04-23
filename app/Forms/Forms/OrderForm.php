<?php


namespace App\Forms\Forms;


use App\Forms\Fields\ChoiceField;
use App\Forms\Fields\DecimalField;
use App\Models\Table;
use App\Models\Waiter;

class OrderForm extends BaseForm
{
    public function __construct($instance=NULL)
    {
        $this->fields = array(
            new ChoiceField('waiter_id', 'Waiter', array(
                'choices' => $this->createChoices(Waiter::all())
            )),
            new ChoiceField('table_id', 'Table', array(
                'choices' => $this->createChoices(Table::all())
            )),
            new DecimalField('price', 'Price', array(
                "minValue" => 1,
                "decimalPlaces" => 2
            ))
        );
        parent::__construct($instance);

    }
}
