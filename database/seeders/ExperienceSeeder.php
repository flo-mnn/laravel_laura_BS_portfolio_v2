<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            [
                'title'=>'GRAPHIC DESIGN SPECIALIST',
                'start_date'=>2017,
                'end_date'=>2018,
                'place'=>'Stepping Stone Advertising, New York, NY',
                'task1'=>'Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).',
                'task2'=>'Managed up to 5 projects or tasks at a given time while under pressure',
                'task3'=>'Recommended and consulted with clients on the most appropriate graphic design',
                'task4'=>'Created 4+ design presentations and proposals a month for clients and account managers'
            ],
            [
                'title'=>'SENIOR GRAPHIC DESIGN SPECIALIST',
                'start_date'=>2019,
                'end_date'=>null,
                'place'=>'Experion, New York, NY',
                'task1'=>'Lead in the design, development, and implementation of the graphic, layout, and production communication materials',
                'task2'=>'Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.',
                'task3'=>'Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design',
                'task4'=>'Oversee the efficient use of production project budgets ranging from $2,000 - $25,000'
            ],
            
        ]);
    }
}
