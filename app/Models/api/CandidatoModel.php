<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'name',
        'address',
        'address_num',
        'address_neighboard',
        'address_complement',
        'address_city',
        'address_uf',
        'dt_nasc',
        'est_civil',
        'phone',
        'cellphone',
        'email',
        'about',
        'cargo_desejado',
        'pretençao_salarial',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoModel');
    }
}
