<?php

namespace Database\Seeders;

use App\Repositories\StoryRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $StoryRep = new StoryRepository();
        $StoryRep->create([
            'name'=>'Let\'s Make a Salad Bowl!',
            'thumbnail'=>'NONE',
            'coinEarn'=>'15'
        ]);
    }
}
