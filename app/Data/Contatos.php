<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{

    protected $table="contatos";

    protected $primaryKey="idcontatos";

    public $timestamps=false;

    protected $fillable =[
       'cpf',
       'nome',
       'fkcargocliente',
       'fkdepartamento',
       'email',
       'fktratamento',


    ];

}
