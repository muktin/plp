<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_courses', function (Blueprint $table) {
            $table->id();
            $table->string('module_name', 100);
            $table->string('course_name', 100);
            $table->integer('count_lession_item');
            $table->integer('count_assignment_item');
            $table->integer('count_quiz_item');
            $table->string('SCED_id', 20);
            $table->date('course_start_date');
            $table->date('course_end_date');
            $table->string('duration', 50);
            $table->string('course_site_url', 100);
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
        Schema::dropIfExists('module_courses');
    }
}
