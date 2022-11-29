<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaCategoria extends Model
{
    use HasFactory;


    //relación uno a muchos
    public function noticias(){
        return $this->hasMany('App\Models\Noticia');
    }
}
