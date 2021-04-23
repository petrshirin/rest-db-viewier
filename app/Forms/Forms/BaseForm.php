<?php


namespace App\Forms\Forms;


use App\Models\RestaurantInfo;
use function Livewire\str;

abstract class BaseForm
{
    protected $obj;
    protected $fields;

    public function __construct($instance=NULL)
    {
        if ($instance) {
            $this->obj = $instance;
            foreach ($this->fields as $field) {
                $fieldName = $field->getInputId();
                $field->setValue($instance->$fieldName);
            }
        }
    }

    public function getValidateRules(): array
    {
        $rules = [];
        foreach ($this->fields as $field) {
            $rules = array_merge($rules, [$field->getInputId() => $field->getRule()]);
        }
        return $rules;
    }

    public function asDiv(): string
    {
        $form = '<div class="form-group">';
        foreach ($this->fields as $field) {
            $form .= "{$field->asDiv()}";
        }
        $form .= '</div>';
        return $form;

    }
    protected function createChoices($querySet): array
    {
        $result = [];
        foreach ($querySet as $obj) {
            array_push($result, [$obj->id, str($obj)]);
        }
        return $result;
    }

}
