<?php

use Illuminate\Database\Seeder;

class masterSCEDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_sceds')->insert([
            'state' => Str::random(20),
            'course_id' => Int::random(10),
            'SCED_subject_code' => Str::random(20),
            'SCED_course_number' => Int::random(20),
            'SCED_course_id' => Int::random(20),
            'state_SCED_course_id' => Str::random(20),
            'SCED_course_title' => Str::random(30),
            'SCED_course_description' => Str::random(100),
            'SCED_career_cluster' => Str::random(50),
            'additional_credit_type' => Str::random(50),
            'course_funding_program' => Str::random(50),
            'high_school_course_request' => Str::random(50),
            'instruction_language' => Str::random(50),
            'curriculum_frame_type' => Str::random(50),
            'course_aligned_with_standards' => Str::random(50),
            'k12_end_of_course_requirement' => Str::random(50),
            'course_applicable_education_level' => Str::random(50),
            'course_certification_description' => Str::random(100),
            'course_section_instructional_delivery_mode' => Str::random(50),
            'NCAA_eligibility' => Str::random(50),
            'family_and_consumer_science_course_indicator' => Str::random(50),
            'work_based_learning_opportunity_type' => Str::random(50),
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1
        ]);
    }
}
