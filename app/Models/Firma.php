<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Firma
 *
 * @property $id
 * @property $asistencia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistencia $asistencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Firma extends Model
{
    
    static $rules = [
		'asistencia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asistencia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asistencia()
    {
        return $this->hasOne('App\Models\Asistencia', 'id', 'asistencia_id');
    }
    

}
