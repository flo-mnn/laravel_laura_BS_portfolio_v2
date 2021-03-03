<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            [
                'title'=>'BACHELOR OF FINE ARTS & GRAPHIC DESIGN',
                'start_date'=>2010,
                'end_date'=>2014,
                'place'=>'Rochester Institute of Technology, Rochester, NY',
                'text'=>'Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila'
            ],
            [
                'title'=>'MASTER OF FINE ARTS & GRAPHIC DESIGN',
                'start_date'=>2015,
                'end_date'=>2016,
                'place'=>'Rochester Institute of Technology, Rochester, NY',
                'text'=>'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'
            ],
            
        ]);
    }
}
