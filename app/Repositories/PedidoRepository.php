<?php

namespace App\Repositories;

use App\Models\Pedido;
use InfyOm\Generator\Common\BaseRepository;

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data',
        'status',
        'tipo',
        'valor',
        'cliente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pedido::class;
    }
}
