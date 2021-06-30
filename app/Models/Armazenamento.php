<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armazenamento extends Model
{
    protected $table = 'local_armazenamento';

    protected $fillable = ['nome_armazenamento','ativo'];

    public $timestamps = false;
}
