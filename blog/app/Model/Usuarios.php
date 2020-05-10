<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property mixed $nombre
 * @property mixed $correo
 * @property mixed $contrasena
 * @property enum $rol
 */

class Usuarios extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * @var array
     */
    protected $fillable = [ 'nombre', 'correo','contrasena','rol'];







}
