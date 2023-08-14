<?php

namespace Database\Seeders;

use App\Repositories\AudioRepository;
use App\Repositories\PageRepository;
use App\Repositories\TextRepository;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
    public function run(){
        $textRep = new TextRepository();
        $audioRep = new AudioRepository();
        $pageRep = new PageRepository();
        $assets = ['audios'=>$textRep];
        $tmp = "resources/";
        foreach ($assets as $key => $value) {
            $dir = $tmp.$key;
        }

        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if($file != '.' && $file != '..'){
                    $file = str_replace('.mp3','',$file);
                    $value->create([
                        'text'=>$file
                    ]);
                }
            }
            closedir($handle);
        }
    }
}
