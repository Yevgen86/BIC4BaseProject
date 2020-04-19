<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $guarded = ['id'];

    public function invention()
    {
        return $this->hasMany(Invention::class);
    }
}
