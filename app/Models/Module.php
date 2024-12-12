<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function course()
{
    return $this->belongsTo(Course::class);
}

public function contents()
{
    return $this->hasMany(Content::class);
}

}
