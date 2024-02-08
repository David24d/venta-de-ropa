<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 * 
 * @property int $id_usuario
 * @property string|null $usu_rol
 * @property string|null $usu_genero
 * @property string|null $usu_nombre
 * @property string|null $usu_email
 * @property string|null $usu_password
 * @property int|null $usu_celular
 * @property float|null $usu_salario
 * @property string|null $usu_contrato
 * @property string|null $usu_ciudad
 * @property string|null $usu_direccion
 * 
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class TipoUsuario extends Model
{
	protected $table = 'tipo_usuario';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'usu_celular' => 'int',
		'usu_salario' => 'float'
	];

	protected $hidden = [
		'usu_password'
	];

	protected $fillable = [
		'usu_rol',
		'usu_genero',
		'usu_nombre',
		'usu_email',
		'usu_password',
		'usu_celular',
		'usu_salario',
		'usu_contrato',
		'usu_ciudad',
		'usu_direccion'
	];

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'ven_id_usuario');
	}
}
