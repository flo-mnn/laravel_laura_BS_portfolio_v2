<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navlinks')->insert([
            [
                'link'=>'home'
            ],
            [
                'link'=>'about'
            ],
            [
                'link'=>'resume'
            ],
            [
                'link'=>'services'
            ],
            [
                'link'=>'portfolio'
            ],
            [
                'link'=>'contact'
            ],
        ]);
    }
}
