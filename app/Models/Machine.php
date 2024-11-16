<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    /** @use HasFactory<\Database\Factories\MachineFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];


    /**
     * Get the components associated with the machine.
     */
    public function components()
    {
        return $this->hasMany(Component::class);
    }

    /**
     * Get the detections associated with the machine.
     */
    public function detections()
    {
        return $this->hasMany(Detection::class);
    }

}
