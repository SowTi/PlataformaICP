<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    protected $table="cargos";

    protected $primaryKey="idcargos";

    public $timestamps=false;

    protected $fillable =[
       'descricaocargo',


    ];

}
