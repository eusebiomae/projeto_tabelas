<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpresaVagaCandidaturaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'empresa_vaga_candidatura';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_empresa',
        'candidato',
        'vaga',
    ];

    public function empresa()
    {
        return $this->hasOne('App\Models\api\EmpresaVagaCandidaturaModel');
    }
}
