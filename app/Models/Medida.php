<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = 'unidade_medida';

    protected $fillable = ['medida','sigla','ativo'];

    public $timestamps = false;
}
