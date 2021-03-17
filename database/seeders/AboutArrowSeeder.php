<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutArrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_arrows')->insert([
            [
                "title"=>'Name',
                "info"=>'Laura Thomson',
                "order"=>1
            ],
            [
                "title"=>'Website',
                "info"=>'www.example.com',
                "order"=>2
            ],
            [
                "title"=>'Phone',
                "info"=>'+123 456 7890',
                "order"=>3
            ],
            [
                "title"=>'City',
                "info"=>'New-York, USA',
                "order"=>4
            ],
            [
                "title"=>'Age',
                "info"=>'30',
                "order"=>5
            ],
            [
                "title"=>'Degree',
                "info"=>'Master',
                "order"=>6
            ],
            [
                "title"=>'Email',
                "info"=>'email@example.com',
                "order"=>7
            ],
            [
                "title"=>'Freelance',
                "info"=>'available',
                "order"=>8
            ]
        ]);
    }
}
