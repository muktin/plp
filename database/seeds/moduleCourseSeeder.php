<?php

use Illuminate\Database\Seeder;

class moduleCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module_courses')->insert([
            'module_name' => Str::random(20),
            'course_name' => Str::random(20),
            'count_lession_item' => Str::random(20),
            'count_assignment_item' => Str::random(20),
            'count_quiz_item' => Str::random(20),
            'SCED_id' => Int::random(20),
            'course_start_date' => now(),
            'course_end_date' => now(),
            'duration' => Str::random(20),
            'course_site_url' => Str::random(20),
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1
        ]);
    }
}
