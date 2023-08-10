<?php

namespace App\Repositories;

use App\Models\Touches;

class TouchRepository extends BaseRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Touches::class;
    }
}
