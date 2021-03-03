<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_filters')->insert([
            [
                'filter'=>'all',
            ],
            [
                'filter'=>'app',
            ],
            [
                'filter'=>'card',
            ],
            [
                'filter'=>'web',
            ],
        ]);
    }
}
