<?php

namespace App\Repositories;

use App\Models\Agent;
use App\Repositories\BaseRepository;

class AgentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'property_id',
        'full_name',
        'phone',
        'agency_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Agent::class;
    }
}
