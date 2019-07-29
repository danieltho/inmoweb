<?php
namespace DanielSann\InmoWeb\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Propiedade extends Model
{
    //
    protected $fillable =[
      'moneda_id','estado_id',
      'tipo_id','categoria_id',
      'titulo','descripcion',
      'url_video','precio_valor',
      'uri'
    ];


    public function moneda()
    {
        return $this->hasOne(Moneda::class,'id','moneda_id');
    }

    public function estado()
    {
        return $this->hasOne(Estado::class,'id','estado_id');
    }

    public function tipo()
    {
        return $this->hasOne(Tipo::class,'id','tipo_id');
    }

    public function getPropEstadoAttribute()
    {
        if($this->estado)
            return "{$this->estado->name}";
        return ".-.-";
    }

    public function getPropTipoAttribute()
    {
        if($this->tipo)
            return "{$this->tipo->name}";
        return ".-.-";
    }


    public function setUriAttribute($value)
    {
        $this->attributes['uri'] = Str::slug($value);
    }


}
