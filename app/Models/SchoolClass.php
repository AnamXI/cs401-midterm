<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $table = 'classes';

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'id');
    }
    
    public function students(){
        return $this->belongsToMany(Student::class, 'class_student', 'id', 'id')->withTimestamps();
    }
}
