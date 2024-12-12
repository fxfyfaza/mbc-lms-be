<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function module()
{
    return $this->belongsTo(Module::class);
}

public function questions()
{
    return $this->hasMany(Question::class);
}

}
