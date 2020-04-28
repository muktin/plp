<?php

namespace App\admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MasterCourse extends Model
{
    protected $fillable = [
        'title', 'SCED_course_id', 'status', 'created_by', 'updated_by'
       ]; 
}
