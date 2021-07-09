<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $table = 'cidade';

    protected $fillable = ['nome','ativo','id_estado'];

    public $timestamps = false;

    /**
     * Relacionamento de Estados com Cidades
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Estados(): HasOne
    {
        return $this->hasOne(Estados::class, 'id', 'id_estado');
    }
}
