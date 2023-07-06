<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepOneTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_one_two', function (Blueprint $table) {
                $table->id();
                $table->string('project_name');
                $table->string('project_description');
                $table->string('client');
                $table->string('contractor');
                $table->string('max_x');
                $table->string('min_x');
                $table->string('max_y');
                $table->string('min_y');
                $table->string('max_z');
                $table->string('min_z');
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
        Schema::dropIfExists('step_one_two');
    }
}
