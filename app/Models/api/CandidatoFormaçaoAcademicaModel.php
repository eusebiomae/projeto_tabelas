<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoFormaçaoAcademicaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_formaçao_academica';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'instituiçao_ensino',
        'formaçao',
        'area_estudo',
        'ano_inicio',
        'desc',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoFormaçaoAcademicaModel');
    }
}
