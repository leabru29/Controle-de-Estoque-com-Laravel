<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $table = 'saida_produto';

    protected $fillable = ['id_produto','quant','data'];

    public $timestamps = false;

    public function Produto(): HasOne
    {
        return $this->hasOne(Produto::class, 'id', 'id_produto');
    }
}
