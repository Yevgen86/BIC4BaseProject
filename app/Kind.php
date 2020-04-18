<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    protected $guarded = ['id'];

    public function spell()
    {
        return $this->hasMany(Spell::class);
    }
}
