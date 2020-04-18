<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Translation extends Model
{
    protected $guarded = ['id'];

    public function definition()
    {
        return $this->belongsTo(Definition::class);
    }
}
