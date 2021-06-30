<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadGrupoProduto extends Model
{
    protected $table = 'grupo_produto';

    protected $fillable = ['nome_grupo','ativo'];

    public $timestamps = false;
}
