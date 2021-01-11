<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpresaRespostaCandidaturaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'empresa_resposta_candidatura';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_empresa',
        'candidatura',
        'pergunta',
        'resposta',
    ];

    public function empresa()
    {
        return $this->hasOne('App\Models\api\EmpresaRespostaCandidaturaModel');
    }
}
