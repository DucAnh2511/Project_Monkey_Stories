<?php

namespace App\Repositories;

use App\Models\Pages;

class PageRepository extends BaseRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Pages::class;
    }
}
