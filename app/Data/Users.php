<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';

    protected $primarykey="id";

    public $timestamps=false;

    protected $fillable =[
       'name',
       'email',
       'password',
       'active'

    ];
    protected $guarded =[
      'token',
      'remember_token'
    ];
}
