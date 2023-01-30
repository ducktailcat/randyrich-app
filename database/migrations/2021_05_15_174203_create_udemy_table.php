<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUdemyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udemy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('u_id');
            $table->string('u_title');
            $table->string('u_subtitle');
            $table->string('u_link');
            $table->string('u_thumb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('udemy');
    }
}
