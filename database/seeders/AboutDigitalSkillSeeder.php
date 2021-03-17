<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutDigitalSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_digital_skills')->insert([
            [
                'skill'=>'HTML',
                'percentage'=>100,
                'order'=>1
            ],
            [
                'skill'=>'CSS',
                'percentage'=>90,
                'order'=>2
            ],
            [
                'skill'=>'JAVASCRIPT',
                'percentage'=>75,
                'order'=>3
            ]
        ]);
    }
}
