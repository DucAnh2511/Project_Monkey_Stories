<?php

namespace App\Repositories;

use App\Models\Texts;

class TextRepository extends BaseRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Texts::class;
    }
}
