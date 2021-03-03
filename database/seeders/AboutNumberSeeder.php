<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_numbers')->insert([
            [
                "icon"=>'icofont-simple-smile',
                "icon_color"=>'#20b38e',
                'number'=>65,
                'emphasis'=>'Happy Clients',
                'text'=>'consequuntur voluptas nostrum aliquid ipsam architecto ut.'
            ],
            [
                "icon"=>'icofont-document-folder',
                "icon_color"=>'#8a1ac2',
                'number'=>85,
                'emphasis'=>'Projects',
                'text'=>'adipisci atque cum quia aspernatur totam laudantium et quia dere tan.'
            ],
            [
                "icon"=>'icofont-clock-time',
                "icon_color"=>'#2cbdee',
                'number'=>12,
                'emphasis'=>'Years of Experience',
                'text'=>'aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel'
            ],
            [
                "icon"=>'icofont-award',
                "icon_color"=>'#ffb459',
                'number'=>15,
                'emphasis'=>'Awards',
                'text'=>' rerum asperiores dolor alias quo reprehenderit eum et nemo pad der'
            ],
        ]);
    }
}
