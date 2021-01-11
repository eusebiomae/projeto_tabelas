<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoExperienciaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_experiencia';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'cargo',
        'tipo_emprego',
        'empresa',
        'localidade',
        'cargo_atual',
        'data_inicio',
        'data_termino',
        'desc',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoExperienciaModel');
    }
}
