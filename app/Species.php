<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $guarded = ['id'];

    public function animal()
    {
        return $this->hasMany(Animal::class);
    }
}
