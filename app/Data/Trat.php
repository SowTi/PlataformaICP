<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Trat extends Model
{

    protected $table="tratamentos";

    protected $primaryKey="idtratamentos";

    public $timestamps=false;

    protected $fillable =[
       'descricaotratamento',


    ];

}
