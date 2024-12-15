<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;

class TransactionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'property_id',
        'client_id',
        'agent_id',
        'transaction_type',
        'amount',
        'transaction_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Transaction::class;
    }
}
