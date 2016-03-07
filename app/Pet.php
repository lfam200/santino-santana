<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    public function person(){

        return $this->belongsTo(Person::class);
    }

    public function race(){

        return $this->belongsTo(Race::class);
    }

    public function pelage(){

        return $this->belongsTo(Pelage::class);
    }
}
