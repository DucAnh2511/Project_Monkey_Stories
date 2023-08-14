<?php

namespace Database\Seeders;

use App\Repositories\AudioRepository;
use App\Repositories\PageRepository;
use App\Repositories\TextRepository;
use Illuminate\Database\Seeder;

class AudiosSeeder extends Seeder
{
    public function run(){
        $audioRep = new AudioRepository();
        $assets = ['audios'=>$audioRep];
        $tmp = "resources/";
        $x = 1;
        foreach ($assets as $key => $value) {
            $dir = $tmp.$key;
        }
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if($file != '.' && $file != '..'){
                    $value->create([
                        'text_id'=>$x,
                        'link'=>$tmp.$file
                    ]);
                    $x++;
                }
            }
            closedir($handle);
        }
    }
}
