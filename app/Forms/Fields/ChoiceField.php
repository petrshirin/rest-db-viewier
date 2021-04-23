<?php


namespace App\Forms\Fields;


class ChoiceField extends BaseField
{
    protected $initial;
    public function __construct($inputId, $label, $params=array())
    {
        if (isset($params['initial']))
            $this->initial = $params['initial'];
        parent::__construct($inputId, $label, $params);
    }

    public function getOptions(): string
    {
        $options = "";
        if ((!$this->initial) && ($this->value)) {
            $this->initial = $this->value;
        }
        foreach ($this->choices as $choice) {
            $options .= $this->getOption($choice[0], $choice[1]);
        }
        return $options;
    }
    protected function getOption($value, $visibleValue): string
    {
        $option = "<option value='$value' ";
        $option .= $value == $this->initial ? 'selected>' : ">";
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
            name='{$this->inputId}' {$this->inputVisibleTypes}>" .
            $this->getOptions() .
"           </select>
        </div>
        ";
    }
}
