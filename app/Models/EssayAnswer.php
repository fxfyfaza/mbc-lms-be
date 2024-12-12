<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EssayAnswer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'praktikan_id');
    }
    
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
    
}
