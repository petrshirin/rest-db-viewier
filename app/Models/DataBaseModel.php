<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class DataBaseModel extends Model {

    /**
     * @var mixed
     */
    protected $modelName = NULL;

    public function getModelName() {
        return $this->modelName;
    }

}
