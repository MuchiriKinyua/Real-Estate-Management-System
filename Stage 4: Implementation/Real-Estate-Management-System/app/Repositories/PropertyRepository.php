<?php

namespace App\Repositories;

use App\Models\Property;
use App\Repositories\BaseRepository;

class PropertyRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Property::class;
    }
}
