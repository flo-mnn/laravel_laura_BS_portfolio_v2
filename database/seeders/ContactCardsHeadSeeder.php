<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactCardsHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_cards_heads')->insert([
            [
                'icon'=>'bx bx-share-alt',
                'title'=>'Social Profiles'
            ],
            [
                'icon'=>'bx bx-envelope',
                'title'=>'Email Me'
            ],
            [
                'icon'=>'bx bx-phone-call',
                'title'=>'Call Me'
            ],
        ]);
    }
}
