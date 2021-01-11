<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpresaVagaPerguntaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'empresa_vaga_pergunta';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_empresa',
        'vaga',
        'pergunta',
    ];

    public function empresa()
    {
        return $this->hasOne('App\Models\api\EmpresaVagaPerguntaModel');
    }
}
