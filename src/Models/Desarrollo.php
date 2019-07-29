<?php
namespace DanielSann\InmoWeb\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Desarrollo extends Model
{
    //
    protected $fillable =[
      'titulo','descripcion',
      'url_video',
      'uri'
    ];



    public function setUriAttribute($value)
    {
        $this->attributes['uri'] = Str::slug($value);
    }


}
