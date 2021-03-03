<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_items')->insert([
            [
                'title'=>'App 1',
                'cover_src'=>'portfolio/portfolio-1.jpg',
                'filter'=>'app',
                // 'category'=>'app',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Web 3',
                'cover_src'=>'portfolio/portfolio-2.jpg',
                'filter'=>'web',
                // 'category'=>'web design',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'App 2',
                'cover_src'=>'portfolio/portfolio-3.jpg',
                'filter'=>'app',
                // 'category'=>'app',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Card 2',
                'cover_src'=>'portfolio/portfolio-4.jpg',
                'filter'=>'card',
                // 'category'=>'card',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Web 2',
                'cover_src'=>'portfolio/portfolio-5.jpg',
                'filter'=>'web',
                // 'category'=>'web',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'App 3',
                'cover_src'=>'portfolio/portfolio-6.jpg',
                'filter'=>'app',
                // 'category'=>'app',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Card 1',
                'cover_src'=>'portfolio/portfolio-7.jpg',
                'filter'=>'card',
                // 'category'=>'card',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Card 2',
                'cover_src'=>'portfolio/portfolio-8.jpg',
                'filter'=>'card',
                // 'category'=>'card',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ],
            [
                'title'=>'Web 3',
                'cover_src'=>'portfolio/portfolio-9.jpg',
                'filter'=>'web',
                // 'category'=>'web',
                // 'src1'=>'portfolio/portfolio-details-1.jpg',
                // 'src2'=>'portfolio/portfolio-details-2.jpg',
                // 'src3'=>'portfolio/portfolio-details-3.jpg',
                // 'client'=>'ASU Company',
                // 'text'=>' Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.'
            ]
        ]);
    }
}
