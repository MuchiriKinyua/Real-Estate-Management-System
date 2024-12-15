<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    public $fillable = [
        'id',
        'property_id',
        'image_url'
    ];

    protected $casts = [
        'image_url' => 'string'
    ];

    public static array $rules = [
        'property_id' => 'nullable',
        'image_url' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Property::class, 'property_id');
    }
}
