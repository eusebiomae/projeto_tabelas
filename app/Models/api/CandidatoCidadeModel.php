<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoCidadeModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_cidade';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'id_uf',
        'id_pais',
        'nome',

    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoCidadeModel');
    }
}
