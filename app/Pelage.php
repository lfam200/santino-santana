<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelage extends Model
{
    protected $table = 'pelages';

    public function pets() {

        return $this->hasMany(Pet::Class);
    }

}
