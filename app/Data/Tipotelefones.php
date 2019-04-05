<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Tipotelefones extends Model
{

    protected $table="tipotelefones";

    protected $primaryKey="idtipotelefone";

    public $timestamps=false;

    protected $fillable =[
       'tipotelefone',

    ];

}
