<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends DataBaseModel
{
    protected $fillable = [
        'name',
        'info_id'
    ];

    protected $visible = [
        'id',
        'name',
        'info'
    ];


    public function info() {
        return $this->belongsTo('App\Models\RestaurantInfo');
    }

    protected $modelName = 'restaurant';

    public function __toString() : string {
        return "{$this->id} {$this->modelName}";
    }

    use HasFactory;
}
