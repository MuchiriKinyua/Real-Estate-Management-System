<?php

namespace App\Repositories;

use App\Models\Lease;
use App\Repositories\BaseRepository;

class LeaseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'property_id',
        'client_id',
        'start_date',
        'end_date',
        'monthly_rent',
        'payment_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Lease::class;
    }
}
