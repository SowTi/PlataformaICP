<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{

    protected $table="telefones";

    protected $primaryKey="idtelefones";

    public $timestamps=false;

    protected $fillable =[
       'codigopais',
       'codigoestado',
       'telefone',
       'ramal',
       'tipotelefone_idtipotelefone',



    ];

}
