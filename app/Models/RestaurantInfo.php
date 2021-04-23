<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantInfo extends DataBaseModel
{
    protected $fillable = [
        "address",
        "phone"
    ];

    protected $visible = [
        "id",
        "address",
        "phone"
    ];

    protected $table = "restaurantsinfos";

    protected $modelName = 'restaurantinfo';

    public function __toString() : string {
        return "{$this->address} {$this->phone}";
    }

    use HasFactory;
}
