<?php


namespace App\Forms\Fields;


class ManyChoiceField extends ChoiceField
{
    protected $required = false;
    public function __construct($inputId, $label, $params = array())
    {
        parent::__construct($inputId, $label, $params);
        $this->inputId .= '[]';
    }

    protected function getOption($value, $visibleValue): string
    {
        $option = "<option value='$value' ";
        $option .= in_array($value, $this->initial) ? 'selected>' : ">";
        $option .= $visibleValue;
        $option .= "</option>";
        return $option;
    }

    public function asDiv(): string
    {
        return "
        <div class='field'>
            <label for='{$this->inputId}'>{$this->label}</label>
            <select class='form-control' id='{$this->inputId}'
            name='{$this->inputId}' {$this->inputVisibleTypes} multiple>" .
            $this->getOptions() .
            "           </select>
        </div>
        ";
    }

}
