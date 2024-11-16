<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    /** @use HasFactory<\Database\Factories\DetectionFactory> */
    use HasFactory;
    protected $fillable = [
        'machine_id',
        'image_path',
        'missing_items',
        'detected_items',
    ];

    /**
     * Get the machine that owns the detection.
     */
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
