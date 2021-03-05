<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('cover_src');
            $table->string('filter',20);
            // $table->string('category',100);
            // $table->string('src1',500)->nullable();
            // $table->string('src2',500)->nullable();
            // $table->string('src3',500)->nullable();
            // $table->string('client',100);
            // $table->date('date')->nullable();
            $table->string('url',500)->nullable()->default('#');
            // $table->string('text',2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_items');
    }
}
