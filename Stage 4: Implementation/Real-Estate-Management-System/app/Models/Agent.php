<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $table = 'agents';

    public $fillable = [
        'property_id',
        'full_name',
        'phone',
        'agency_name'
    ];

    protected $casts = [
        'full_name' => 'string',
        'phone' => 'string',
        'agency_name' => 'string'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:100',
        'agency_name' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }
}
