<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estado';

    protected $fillable = ['nome','uf','ativo','id_pais'];

    public $timestamps = false;
    
    /**
     * Relacionamento de países com Estados
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Pais(): HasOne
    {
        return $this->hasOne(Paises::class, 'id', 'id_pais');
    }
}
