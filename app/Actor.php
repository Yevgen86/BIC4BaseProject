<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    protected $guarded = ['id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
