<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\BaseRepository;

class AppointmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'property_id',
        'client_id',
        'agent_id',
        'appointment_date',
        'appointment_time',
        'status',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Appointment::class;
    }
}
