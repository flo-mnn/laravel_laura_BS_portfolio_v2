<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_images')->insert([
            [
                'src'=>'hero-bg.jpg'
            ],
            [
                'src'=>'me.jpg'
            ],
            [
                'src'=>'testimonials-bg.jpg'
            ],
            [
                'src'=>'footer-bg.jpg'
            ]
        ]);
    }
}
