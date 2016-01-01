<?php

namespace App\Model;

<<<<<<< HEAD
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/master

class Setting extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $table = 'journel';//用户日志
=======
    protected $table = 'bm-setup';
    public $primarkey='id';
    protected $dateFormat='U';

>>>>>>> origin/master
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = ['time', 'user', 'centent','ip'];
=======
    protected $fillable = ['id', 'name', 'higher','charge','phone','fax','state','note','change_person','create_person'];
    //public $timestamps = false;
>>>>>>> origin/master

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
<<<<<<< HEAD
    public $timestamps = false;
=======
>>>>>>> origin/master
    protected $hidden = ['password', 'remember_token'];
}


