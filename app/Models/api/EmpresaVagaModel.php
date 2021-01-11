<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpresaVagaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'empresa_vaga';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_empresa',
        'desc',
        'job_type',
        'area',
        'responsability',
        'quali',
        'diferential',
        'requirement',
    ];

    public function empresa()
    {
        return $this->hasOne('App\Models\api\EmpresaVagaModel');
    }
}
