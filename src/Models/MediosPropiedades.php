<?php
namespace DanielSann\InmoWeb\Models;

use Illuminate\Database\Eloquent\Model;

class MediosPropiedades extends Model
{
    //
    protected $table = 'medios_propiedades';
    protected $fillable = [
        'propiedad_id','medio_id'
    ];

    public function sourceFile()
    {
        return $this->hasOne(Medio::class,'id', 'medio_id');
    }
}
