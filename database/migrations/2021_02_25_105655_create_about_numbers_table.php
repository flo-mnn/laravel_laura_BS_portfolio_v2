<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('icon',100);
            $table->string('icon_color',100);
            $table->integer('number');
            $table->string('emphasis',40);
            $table->string('text',500)->nullable();
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
        Schema::dropIfExists('about_numbers');
    }
}
