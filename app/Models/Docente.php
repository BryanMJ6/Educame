<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistencia[] $asistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'departamento' => 'required',
		'PrimerNombre' => 'required',
		'SegundoNombre' => 'required',
		'PrimerApellido' => 'required',
		'SegundoApellido' => 'required',
		'Edad' => 'required',
		'Genero' => 'required',
		'EspecialidadTitulacion' => 'required',
		'EspecialidadImparte' => 'required',
		'DUI' => 'required',
		'NUP' => 'required',
		'Acreditado' => 'required',
		'FechaAcreditado' => 'required',
		'Dirreccion' => 'required',
		'Telefono' => 'required',
		'CorreoPersonal' => 'required',
		'CorreoMINED' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamento','PrimerNombre','SegundoNombre','PrimerApellido','SegundoApellido',
                            'Edad','Genero','EspecialidadTitulacion',
                            'EspecialidadImparte','DUI','NUP',
                            'Acreditado','FechaAcreditado','Dirreccion',
                            'Telefono','CorreoPersonal','CorreoMINED'
                          ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia', 'docente_id', 'id');
    }
    

}
