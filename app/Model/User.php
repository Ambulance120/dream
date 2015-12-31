<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    protected $fillable = ['number','name','password','rpassword','phone','industry','company','address','qq','email', 'cnumber'];

    protected $hidden = ['password', 'remember_token'];
}
