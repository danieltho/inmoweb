<?php
namespace DanielSann\InmoWeb\Models;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    protected $fillable = [
        'name','prefix'
    ];

    public function getMonedaAttribute()
    {
        return "{$this->prefix} {$this->name}";
    }
}
