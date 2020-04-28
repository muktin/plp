<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardByStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_by_states', function (Blueprint $table) {
            $table->id();
            $table->string('standard_source', 255);
            $table->string('standard', 150);
            $table->string('grade_level', 100);
            $table->string('subject_area', 200);
            $table->string('topic', 200);
            $table->string('sub_topic', 200);
            $table->string('objective_description', 550);
            $table->tinyInteger('status');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('standard_by_states');
    }
}
