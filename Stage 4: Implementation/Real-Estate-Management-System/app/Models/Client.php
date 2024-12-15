<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = 'clients';

    public $fillable = [
        'full_name',
        'phone',
        'client_type'
    ];

    protected $casts = [
        'full_name' => 'string',
        'phone' => 'string',
        'client_type' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:100',
        'client_type' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function leases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Lease::class, 'client_id');
    }
}
