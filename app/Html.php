<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Html extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 'html'
    ];
}
