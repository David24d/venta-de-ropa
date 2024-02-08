<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_produ
 * @property string|null $prod_nombre
 * @property string|null $prod_descripcion
 * @property int|null $prod_stock
 * @property string|null $prod_talla
 * @property string|null $prod_color
 * @property string|null $prod_imagen
 * @property float|null $prod_precio
 * 
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'id_produ';
	public $timestamps = false;

	protected $casts = [
		'prod_stock' => 'int',
		'prod_precio' => 'float'
	];

	protected $fillable = [
		'prod_nombre',
		'prod_descripcion',
		'prod_stock',
		'prod_talla',
		'prod_color',
		'prod_imagen',
		'prod_precio'
	];

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'ven_id_producto');
	}
}
