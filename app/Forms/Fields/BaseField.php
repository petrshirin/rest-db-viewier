<?php


namespace App\Forms\Fields;


abstract class BaseField
{
    protected $inputId, $label;
    protected $value = '';
    protected $choices = array();
    protected $inputVisibleTypes = '';
    protected $rule;
    protected $required = true;
    protected $max;

    /**
     * @param mixed|string $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getRule(): string
    {
        $rule = $this->required ? "required" : "";
        $rule .= strlen($rule) ? "|" : "";
        $rule .=  $this->rule;
        return $rule;
    }

    /**
     * @return mixed
     */
    public function getInputId()
    {
        return $this->inputId;
    }

    function __construct($inputId, $label, $params=array()) {
        $this->inputId = $inputId;
        $this->label = $label;
        if (isset($params['value'])) {
            $this->value = $params['value'];
        }
        if (isset($params['choices'])) {
            $this->choices = $params['choices'];
        }
        if (isset($params['required'])) {
            $this->required = $params['required'];
        }
        if (isset($params['max'])) {
            $this->max = $params['max'];
            $this->inputVisibleTypes .= " maxlength='{$params['max']}'";
        }

    }

    public function asDiv(): string
    {
        return "
        <div class='field'>
            <label for='{$this->inputId}'>{$this->label}</label>
            <input class='form-control' id='{$this->inputId}'
            name='{$this->inputId}' value='{$this->value}'
            {$this->inputVisibleTypes}
            >
        </div>
        ";
    }
}
