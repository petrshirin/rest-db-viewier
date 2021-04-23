<?php


namespace App\Forms\Fields;


class DecimalField extends BaseField
{
    protected $inputVisibleTypes = 'type="number"';
    protected $rule = 'numeric';

    public function __construct($inputId, $label, $params=array())
    {
        if (isset($params['minValue'])) {
            $this->inputVisibleTypes .= " min='{$params['minValue']}'";
        }
        if (isset($params['decimalPlaces'])) {
            $step = '';
            for ($i = 0; $i < $params['decimalPlaces']; $i++) {
                if ($i == 0) {
                    $step .= '.';
                    continue;
                }
                $step .= "0";
            }
            if (strlen($step))
                $step .= '1';
                $this->inputVisibleTypes .= " step='0.$step'";
        }
        parent::__construct($inputId, $label, $params);
    }

}
