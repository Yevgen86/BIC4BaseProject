<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invention extends Model
{
    protected $guarded = ['id'];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
