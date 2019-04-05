<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Origem extends Model
{

    protected $table="origem";

    protected $primaryKey="idorigem";

    public $timestamps=false;

    protected $fillable =[
       'descricaoorigem',




    ];

}
