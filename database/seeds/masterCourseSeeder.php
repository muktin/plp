<?php

use Illuminate\Database\Seeder;

class masterCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_courses')->insert([
            'title' => Str::random(20),
            'SCED_course_id' => Str::random(10),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
