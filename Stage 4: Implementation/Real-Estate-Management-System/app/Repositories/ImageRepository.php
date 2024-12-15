<?php

namespace App\Repositories;

use App\Models\Image;
use App\Repositories\BaseRepository;

class ImageRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'id',
        'property_id',
        'image_url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Image::class;
    }
}
