<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    public $table = 'leases';

    public $fillable = [
        'property_id',
        'client_id',
        'start_date',
        'end_date',
        'monthly_rent',
        'payment_status'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'monthly_rent' => 'string',
        'payment_status' => 'string'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'client_id' => 'nullable',
        'start_date' => 'nullable',
        'end_date' => 'nullable',
        'monthly_rent' => 'nullable|string|max:20',
        'payment_status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Client::class, 'client_id');
    }
}
