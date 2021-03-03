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
                "info"=>'Laura Thomson'
            ],
            [
                "title"=>'Website',
                "info"=>'www.example.com'
            ],
            [
                "title"=>'Phone',
                "info"=>'+123 456 7890'
            ],
            [
                "title"=>'City',
                "info"=>'New-York, USA'
            ],
            [
                "title"=>'Age',
                "info"=>'30'
            ],
            [
                "title"=>'Degree',
                "info"=>'Master'
            ],
            [
                "title"=>'Email',
                "info"=>'email@example.com'
            ],
            [
                "title"=>'Freelance',
                "info"=>'available'
            ]
        ]);
    }
}
