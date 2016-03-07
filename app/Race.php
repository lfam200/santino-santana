<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';

    public function specie(){

        return $this->belongsTo(Specie::class);
    }

    public function pets(){

        return $this->hasMany(Pet::class);
    }


}
