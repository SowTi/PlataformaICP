<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $table="clientes";

    protected $primaryKey="idclientes";

    public $timestamps=false;

    protected $fillable =[
       'fantasia',
       'razaosocial',
       'cnpj',
       'incricaoestadual',
       'website',
       'fkresponsavel',
       'fksegmento',
       'fkorigem',
       'situacao',
       'observacao',
       'endereco',
       'complemento',
       'bairro',
       'cep',
       'cidade',
       'estado',
       'pais',
       'icms',
       'pis',
       'cofins',
       'iss',



    ];

}
