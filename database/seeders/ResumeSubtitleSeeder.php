<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSubtitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_subtitles')->insert([
            [
                'title'=>'Summary'
            ],
            [
                'title'=>'Education'
            ],
            [
                'title'=>'Professional Experience'
            ],
        ]);
    }
}
