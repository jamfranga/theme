<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['titulo', 'resumen','texto','slug','fecha_noticia','id_usuario','id_categoria'];

    protected $dates = ['fecha_noticia'];
}
