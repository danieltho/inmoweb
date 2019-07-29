<?php

namespace DanielSann\InmoWeb\Models;

use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    //

    protected $fillable = [
        'titulo','file_source',
        'is_image','url'
    ];
}
