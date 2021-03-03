<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            [
                'icon'=>'twitter',
            ],
            [
                'icon'=>'facebook',
            ],
            [
                'icon'=>'instagram',
            ],
            [
                'icon'=>'skype',
            ],
            [
                'icon'=>'linkedin',
            ],
        ]);
    }
}
