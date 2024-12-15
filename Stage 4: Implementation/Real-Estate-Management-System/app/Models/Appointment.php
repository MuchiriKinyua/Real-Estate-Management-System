<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $table = 'appointments';

    public $fillable = [
        'property_id',
        'client_id',
        'agent_id',
        'appointment_date',
        'appointment_time',
        'status',
        'notes'
    ];

    protected $casts = [
        'appointment_date' => 'datetime',
        'appointment_time' => 'datetime',
        'status' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'client_id' => 'nullable',
        'agent_id' => 'nullable',
        'appointment_date' => 'nullable',
        'appointment_time' => 'nullable',
        'status' => 'nullable|string|max:20',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }
}
