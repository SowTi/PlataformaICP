<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{

    protected $table="departamentos";

    protected $primaryKey="iddepartamentos";

    public $timestamps=false;

    protected $fillable =[
       'descricaodepartamento',


    ];

}
