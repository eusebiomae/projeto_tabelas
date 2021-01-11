<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpresaModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'empresa';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_empresa',
        'company_type',
        'fantasy_name',
        'logo',
        'cellphone',
        'email',
        'email_rh',
        'phone_rh',
        'cellphone_rh',
        'contact_rh',
        'razao_social',
        'cnpj',
        'ie',
        'im',
        'site',
        'address',
        'address_num',
        'address_complement',
        'address_neighboard',
        'address_city',
        'address_uf',
        'ramo_atividade',
    ];

    public function empresa()
    {
        return $this->hasOne('App\Models\api\EmpresaModel');
    }
}
