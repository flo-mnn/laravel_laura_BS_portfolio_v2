<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                "title"=>'Laura Thomson',
                "subtitle"=>"I'M A PROFESSIONAL PHOTOGRAPHER IN NEW YORK CITY",
            ],
            [
                "title"=>'about me',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ],
            [
                "title"=>'my resume',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ],
            [
                "title"=>'my services',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ],
            [
                "title"=>'my portfolio',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ],
            [
                "title"=>'pricing',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ],
            [
                "title"=>'contact me',
                "subtitle"=>'Sit sint consectetur velit quisquam cupiditate impedit suscipit alias',
            ]
        ]);
    }
}
