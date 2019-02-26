<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Seg extends Model
{

    protected $table="segmentos";

    protected $primaryKey="idsegmentos";

    public $timestamps=false;

    protected $fillable =[
       'descricaosegmento',


    ];

}
