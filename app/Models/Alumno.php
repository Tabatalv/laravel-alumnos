<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;


    //campo fillable me dice que campos coger en bloque, lo demás lo ignora

    protected $fillable = ["nombre","apellido", "dni", "correo"];

}
