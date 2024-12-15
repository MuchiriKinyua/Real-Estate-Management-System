<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $table = 'features';

    public $fillable = [
        'property_id',
        'feature'
    ];

    protected $casts = [
        'feature' => 'string'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'feature' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }
}
