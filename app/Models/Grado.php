<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grado
 *
 * @property $id
 * @property $grado
 * @property $seccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistencia[] $asistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grado extends Model
{
    
    static $rules = [
		'departamento' => 'required',
		'grado' => 'required',
		'modalidad' => 'required',
		'seccion' => 'required',
		'ano' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamento','grado','modalidad','seccion','ano'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia', 'grado_id', 'id');
    }
    

}
