<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            "title"=>'Laura Thomson',
            "subtitle"=>'Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.',
            "copyright"=>'© Copyright Laura. All Rights Reserved',
            "designed"=>'Designed by',
            "link_name"=>'BootstrapMade',
            "link"=>'https://bootstrapmade.com/',
        ]);
    }
}
