<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Medida;
use App\Models\CadGrupoProduto;
use App\Models\Marca;
use App\Models\Fornecedores;
use App\Models\Armazenamento;

class Produto extends Model
{
    protected $table = 'produto';

    protected $fillable = 
    [
        'codi',
        'nome',
        'preco',
        'quant_estoque',
        'id_unidade_medida',
        'id_grupo',
        'id_marca',
        'id_fornecedor',
        'id_local_armazenamento','ativo'
    ];

    public $timestamps = false;

    public function Medida(): HasOne
    {
        return $this->hasOne(Medida::class, 'id', 'id_unidade_medida');
    }

    public function Grupo(): HasOne
    {
        return $this->hasOne(CadGrupoProduto::class, 'id', 'id_grupo');
    }

    public function Marca(): HasOne
    {
        return $this->hasOne(Marca::class, 'id', 'id_marca');
    }

    public function Fornecedores(): HasOne
    {
        return $this->hasOne(Fornecedores::class, 'id', 'id_fornecedor');
    }

    public function Armazenamento(): HasOne
    {
        return $this->hasOne(Armazenamento::class, 'id', 'id_local_armazenamento');
    }

}
