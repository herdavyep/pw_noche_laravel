<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['nombre','apellido', 'correo', 'telefono',
        'direccion', 'fecha_nacimiento'];
}
