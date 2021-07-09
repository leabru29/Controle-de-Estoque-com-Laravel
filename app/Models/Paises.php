<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'pais';

    protected $fillable = ['nome','codi','ativo'];

    public $timestamps = false;
}
