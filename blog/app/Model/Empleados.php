<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property enum $tipoDocumento
 * @property mixed $numeroDocumento
 * @property mixed $nombres
 * @property mixed $apellidos
 * @property date $fechaDeIngreso
 * @property mixed $cargo

 */

class Empleados extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empleados';

    /**
     * @var array
     */
    protected $fillable = [ 'tipoDocumento', 'numeroDocumento','nombres','apellidos','fechaDeIngreso','cargo','salario','horario','activo'];







}
