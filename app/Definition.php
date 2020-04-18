<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    protected $guarded = ['id'];

    public function translation()
    {
        return $this->hasMany(Translation::class);
    }
}
