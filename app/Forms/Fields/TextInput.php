<?php


namespace App\Forms\Fields;


class TextInput extends BaseField
{
    protected $inputVisibleTypes = 'type="text"';

    public function getRule(): string
    {
        $rule = parent::getRule();
        $rule .= "max:{$this->max}";
        return $rule;
    }
}
