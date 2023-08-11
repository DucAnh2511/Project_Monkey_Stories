<?php
namespace App\Repositories;
use App\Models\Stories;

class StoryRepository extends BaseRepository {
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Stories::class;
    }
}
