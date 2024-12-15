<?php

namespace App\Repositories;

use App\Models\Feature;
use App\Repositories\BaseRepository;

class FeatureRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'property_id',
        'feature'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Feature::class;
    }
}
