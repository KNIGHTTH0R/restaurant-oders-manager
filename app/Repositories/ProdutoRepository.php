<?php

namespace App\Repositories;

use App\Models\Produto;
use InfyOm\Generator\Common\BaseRepository;

class ProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'quant_min',
        'quant',
        'preco',
        'categoria_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produto::class;
    }
}
