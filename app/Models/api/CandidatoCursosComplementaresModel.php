<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoCursosComplementaresModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_cursos_complementares';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'instituiçao',
        'curso',
        'tipo_curso',
        'area_estudo',
        'carga_horaria',
        'data_inicio',
        'data_termino',
        'desc',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoCursosComplementaresModel');
    }
}
