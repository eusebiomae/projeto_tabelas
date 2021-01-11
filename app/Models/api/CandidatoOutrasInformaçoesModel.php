<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoOutrasInformaçoesModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_outras_informaçoes';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'titulo',
        'desc',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoOutrasInformaçoesModel');
    }
}
