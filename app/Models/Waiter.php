<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waiter extends DataBaseModel
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'tables'
    ];
    protected $visible = [
        'id',
        'staff',
        'tables'
    ];

    protected $modelName = 'waiter';

    public function staff() {
        return $this->belongsTo('App\Models\Staff');
    }

    public function tables()
    {
        return $this->belongsToMany(Table::class, 'waiter_table');
    }

    public function __toString()
    {
        return "{$this->staff}";
    }
}
