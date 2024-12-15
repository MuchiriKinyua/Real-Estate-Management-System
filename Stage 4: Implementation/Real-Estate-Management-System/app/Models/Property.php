<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $table = 'properties';

    public $fillable = [
        'title',
        'address',
        'city',
        'state',
        'postal_code',
        'property_type',
        'price',
        'status',
        'description',
        'agent_id'
    ];

    protected $casts = [
        'title' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'property_type' => 'string',
        'price' => 'string',
        'status' => 'string',
        'description' => 'string',
        'agent_id' => 'string'
    ];

    public static array $rules = [
        'title' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'city' => 'nullable|string|max:40',
        'state' => 'nullable|string|max:40',
        'postal_code' => 'nullable|string|max:20',
        'property_type' => 'nullable|string|max:100',
        'price' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'description' => 'nullable|string|max:250',
        'agent_id' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function agents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Agent::class, 'property_id');
    }

    public function appointments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Appointment::class, 'property_id');
    }

    public function features(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Feature::class, 'property_id');
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Image::class, 'property_id');
    }

    public function leases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Lease::class, 'property_id');
    }

    public function transactions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Transaction::class, 'property_id');
    }
}
