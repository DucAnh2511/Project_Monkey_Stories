<?php
namespace App\Repositories;



class StoryRepository extends BaseRepository {
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return App\Models\Stories :: class;
    }
}
