<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $fillable = ['titulo', 'descricao', 'autor']; // especificando quais campos  utilizar
}
