<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends DataBaseModel
{
    use HasFactory;

    protected $fillable = [
        "name",
        "celery",
    ];

    protected $visible = [
        "id",
        "name",
        "celery"
    ];

    protected $modelName = 'position';

    public function __toString() : string {
        return "{$this->name}";
    }
}
