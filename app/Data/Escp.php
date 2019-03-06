<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Escp extends Model
{

    protected $table="escopos";

    protected $primaryKey="idescopos";

    public $timestamps=false;

    protected $fillable =[
       'nomeescopo',


    ];

}
