<?php

namespace App\Repositories;

use App\Models\Text_Config;

class TextConfigRepository extends BaseRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Text_Config::class;
    }
}
