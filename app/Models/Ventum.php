<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 * 
 * @property int $id_venta
 * @property int|null $ven_id_producto
 * @property int|null $ven_id_usuario
 * @property string|null $ven_estado
 * @property string|null $ven_numero_seguimiento
 * @property int|null $ven_cantidad
 * @property Carbon $ven_fecha_venta
 * @property float|null $ven_precio_unitario
 * @property float|null $ven_precio_total
 * @property string|null $ven_forma_pago
 * 
 * @property Producto|null $producto
 * @property TipoUsuario|null $tipo_usuario
 *
 * @package App\Models
 */
class Ventum extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'id_venta';
	public $timestamps = false;

	protected $casts = [
		'ven_id_producto' => 'int',
		'ven_id_usuario' => 'int',
		'ven_cantidad' => 'int',
		'ven_fecha_venta' => 'datetime',
		'ven_precio_unitario' => 'float',
		'ven_precio_total' => 'float'
	];

	protected $fillable = [
		'ven_id_producto',
		'ven_id_usuario',
		'ven_estado',
		'ven_numero_seguimiento',
		'ven_cantidad',
		'ven_fecha_venta',
		'ven_precio_unitario',
		'ven_precio_total',
		'ven_forma_pago'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'ven_id_producto');
	}

	public function tipo_usuario()
	{
		return $this->belongsTo(TipoUsuario::class, 'ven_id_usuario');
	}
}
