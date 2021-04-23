<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends DataBaseModel
{
    protected $fillable = [
        'waiter_id',
        'table_id',
        'price'
    ];
    protected $visible = [
        'id',
        'waiter',
        'table',
        'price'
    ];

    protected $modelName = 'order';

    public function waiter() {
        return $this->belongsTo('App\Models\Waiter');
    }

    public function table() {
        return $this->belongsTo('App\Models\Table');
    }

    public function __toString() : string {
        return "{$this->id} {$this->modelName}";
    }

    use HasFactory;
}
