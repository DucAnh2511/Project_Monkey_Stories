<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Texts;
use App\Models\User;
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
            AudiosSeeder::class,
            StoriesSeeder::class,
            PagesSeeder::class
        ]);
        //User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
