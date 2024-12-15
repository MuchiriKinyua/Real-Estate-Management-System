<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $table = 'transactions';

    public $fillable = [
        'property_id',
        'client_id',
        'agent_id',
        'transaction_type',
        'amount',
        'transaction_date'
    ];

    protected $casts = [
        'transaction_type' => 'string',
        'amount' => 'string',
        'transaction_date' => 'datetime'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'client_id' => 'nullable',
        'agent_id' => 'nullable',
        'transaction_type' => 'nullable|string|max:30',
        'amount' => 'nullable|string|max:20',
        'transaction_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }
}
