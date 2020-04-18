<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Spell extends Model
{
    protected $guarded = ['id'];

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }
}
