<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends DataBaseModel
{
    use HasFactory;

    protected $fillable = [
        'number',
        'status'
    ];
    protected $visible = [
        'id',
        'number',
        'status',
    ];

    public function waiters()
    {
        return $this->belongsToMany(Waiter::class, 'waiter_table');
    }

    protected $modelName = 'table';

    public function __toString() : string {
        return "Table №{$this->number} status-{$this->status}";
    }
}
