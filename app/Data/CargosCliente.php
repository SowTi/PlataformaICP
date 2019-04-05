<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class CargosCliente extends Model
{

    protected $table="cargoscliente";

    protected $primaryKey="idcargoscliente";

    public $timestamps=false;

    protected $fillable =[
       'cargodescricaocargo',


    ];

}
