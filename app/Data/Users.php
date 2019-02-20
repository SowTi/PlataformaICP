<?php

namespace App\Data;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
  
  use Notifiable;

   const ACTIVE = 1;
   const INACTIVE = 0;

    protected $table='users';

    protected $primarykey="id";

    public $timestamps=false;

    protected $fillable =[
       'name',
       'email',
       'password',
       'token',
       'active',

    ];
    protected $hidden =[
      'token',
      'remember_token'
    ];
}
