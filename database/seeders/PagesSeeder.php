<?php

namespace Database\Seeders;

use App\Repositories\PageRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dir = "resources/images";
        $pageRepo = new PageRepository();
        $x = 1;
        if ($handle = opendir($dir)) {
            while (false !== ($data = readdir($handle))) {
                if($data != '.' && $data != '..'){
                    $pageRepo->create([
                        'story_id' => '1',
                        'background'=>$data,
                        'page_order' => $x
                    ]);
                    $x++;
                }
            }
            closedir($handle);
        }
    }
}
