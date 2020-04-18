<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $guarded = ['id'];

    public function species()
    {
        return $this->belongsTo(Species::class);
    }
}
