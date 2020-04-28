<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterScedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_sceds', function (Blueprint $table) {
            $table->id();
            $table->string('state', 100);
            $table->string('course_id', 50);
            $table->string('SCED_subject_code', 100);
            $table->string('SCED_course_number', 100);
            $table->string('SCED_course_id', 100);
            $table->string('state_SCED_course_id', 100);
            $table->string('SCED_course_title', 100);
            $table->string('SCED_course_description', 100);
            $table->string('SCED_career_cluster', 100);
            $table->string('additional_credit_type', 100);
            $table->string('course_funding_program', 100);
            $table->string('high_school_course_request', 100);
            $table->string('instruction_language', 100);
            $table->string('curriculum_frame_type', 100);
            $table->string('course_aligned_with_standards', 100);
            $table->string('k12_end_of_course_requirement', 100);
            $table->string('course_applicable_education_level', 255);
            $table->string('course_certification_description', 550);
            $table->string('course_section_instructional_delivery_mode', 255);
            $table->string('NCAA_eligibility', 255);
            $table->string('family_and_consumer_science_course_indicator', 255);
            $table->string('work_based_learning_opportunity_type', 255);
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
        Schema::dropIfExists('master_sceds');
    }
}
