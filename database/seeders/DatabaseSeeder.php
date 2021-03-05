<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AboutArrowSeeder::class,
            AboutDigitalSkillSeeder::class,
            AboutNumberSeeder::class,
            ContactCardsHeadSeeder::class,
            EducationSeeder::class,
            EmailSeeder::class,
            ExperienceSeeder::class,
            FooterSeeder::class,
            FormSeeder::class,
            NavlinkSeeder::class,
            PageImageSeeder::class,
            PhoneSeeder::class,
            PortfolioItemSeeder::class,
            PortfolioFilterSeeder::class,
            ResumeSubtitleSeeder::class,
            ResumeSummarySeeder::class,
            SocialSeeder::class,
            TitleSeeder::class,
            ColorSeeder::class

        ]);
    }
}
