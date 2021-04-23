<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends DataBaseModel
{
    protected $fillable = [
        "FIO",
        "phone",
        'position_id'
    ];
    protected $visible = [
        'id',
        "FIO",
        "phone",
        'position'
    ];

    protected $modelName = 'staff';
    protected $table = "staffs";

    public function position() {
        return $this->belongsTo('App\Models\Position');
    }

    public function __toString() : string {
        return "{$this->FIO}";
    }

    use HasFactory;
}
