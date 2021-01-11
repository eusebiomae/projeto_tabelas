<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoVoluntariadoModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_voluntariado';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'organizaçao',
        'funçao',
        'causa',
        'data_inicio',
        'data_termino',
        'desc',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoVoluntariadoModel');
    }
}
