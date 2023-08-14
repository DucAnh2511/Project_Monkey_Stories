<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Texts;
use App\Repositories\AudioRepository;
use App\Repositories\PageRepository;
use App\Repositories\TextRepository;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TextsSeeder::class,
            AudiosSeeder::class
        ]);
    }
}
