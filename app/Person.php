<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public function user(){

        return $this->hasOne(User::class);

    }

    public function pets(){

        return $this->hasMany(Pet::class);

    }
}
