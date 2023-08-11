<?php

namespace App\Repositories;

use App\Models\Audios;

class AudioRepository extends BaseRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Audios::class;
    }
}
