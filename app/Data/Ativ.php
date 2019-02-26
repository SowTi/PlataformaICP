<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Ativ extends Model
{

    protected $table="atividades";

    protected $primaryKey="idatividades";

    public $timestamps=false;

    protected $fillable =[
       'descricaoatividade',
       'codigoatividade',


    ];

}
