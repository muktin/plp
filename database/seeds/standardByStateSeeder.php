<?php

use Illuminate\Database\Seeder;

class standardByStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standard_by_states')->insert([
            'standard_source' => Str::random(20),
            'standard' => Str::random(20),
            'grade_level' => Str::random(10),
            'subject_area' => Str::random(20),
            'topic' => Str::random(20),
            'sub_topic' => Str::random(20),
            'objective_description' => Str::random(50),
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1
        ]);
    }
}
