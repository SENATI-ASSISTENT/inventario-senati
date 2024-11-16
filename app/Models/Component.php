<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    /** @use HasFactory<\Database\Factories\ComponentFactory> */
    use HasFactory;
    protected $fillable = [
        'machine_id',
        'name',
        'description',
        'quantity',
    ];

    /**
     * Get the machine that owns the component.
     */
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
