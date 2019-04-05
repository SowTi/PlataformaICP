<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class escp_has_ativ extends Model
{

    protected $table="contatos_has_clientes";

    public $timestamps=false;

    protected $fillable =[
       'contatos_idcontatos',
       'clientes_idclientes',


    ];

}
