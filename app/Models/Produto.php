<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Produto",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nome",
 *          description="nome",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="quant_min",
 *          description="quant_min",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="quant",
 *          description="quant",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="preco",
 *          description="preco",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="categoria_id",
 *          description="categoria_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Produto extends Model
{
    use SoftDeletes;

    public $table = 'produtos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'quant_min',
        'quant',
        'preco',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'quant_min' => 'integer',
        'quant' => 'integer',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function menus()
    {
        return $this->belongsToMany(\App\Models\Menu::class, 'produtomenus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function pedidos()
    {
        return $this->belongsToMany(\App\Models\Pedido::class, 'produtopedidos');
    }
}
