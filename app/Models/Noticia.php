<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'resumen','texto','slug','fecha_noticia','id_usuario','id_categoria'];

}
