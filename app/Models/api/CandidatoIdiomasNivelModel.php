<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoIdiomasNivelModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_idiomas_nivel';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'nome',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoIdiomasNivelModel');
    }
}
