<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function registrations()
{
    return $this->hasMany(Registration::class);
}

public function essayAnswers()
{
    return $this->hasMany(EssayAnswer::class, 'praktikan_id');
}

public function multipleChoiceAnswers()
{
    return $this->hasMany(MultipleChoiceAnswer::class, 'praktikan_id');
}

}
