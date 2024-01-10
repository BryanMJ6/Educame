<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencia
 *
 * @property $id
 * @property $docente_id
 * @property $grado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @property Firma[] $firmas
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencia extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'grado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','grado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function firmas()
    {
        return $this->hasMany('App\Models\Firma', 'asistencia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'grado_id');
    }
    
    public function docentes()
    {
        return $this->belongsTo(Docente::class, 'docente_id');
    }

}
