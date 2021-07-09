<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paises;
use App\Models\Estados;
use App\Models\Cidades;

class Fornecedores extends Model
{
    protected $table = 'fornecedor';

    protected $fillable = ['nome','razao_social','num_documento','tipo','telefone','contato','logradouro','numero','complemento','cep','id_pais','id_estado','id_cidade','ativo'];

    public $timestamps = false;

    /**
     * Get the user associated with the Fornecedores
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Pais(): HasOne
    {
        return $this->hasOne(Paises::class, 'id', 'id_pais');
    }

    public function Estados(): HasOne
    {
        return $this->hasOne(Estados::class, 'id', 'id_estado');
    }

    public function Cidades(): HasOne
    {
        return $this->hasOne(Cidades::class, 'id', 'id_cidade');
    }
}
