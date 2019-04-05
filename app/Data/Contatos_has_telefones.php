<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class escp_has_ativ extends Model
{

    protected $table="contatos_has_clientes";

    public $timestamps=false;

    protected $fillable =[
       'Contatos_idcontatos',
       'telefones_idtelefones',
       'telefones_tipotelefone_idtipotelefone',


    ];

}
