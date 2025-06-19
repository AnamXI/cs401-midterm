<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function classes(): BelongsTo
    {
        return $this->belongsToMany(User::class, 'class_student', 'id', 'id')->withTimestamps();
    }
}
