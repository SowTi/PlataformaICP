<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class escp_has_ativ extends Model
{

    protected $table="escopos_has_atividades";

    public $timestamps=false;

    protected $fillable =[
       'escopos_idescopos',
       'atividades_idatividades',


    ];

}
