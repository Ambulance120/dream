<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'basket';
    public $primarkey='id';
    protected $dateFormat='U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'state','flag','number','supplier','department','buyer','amount','maker','obsolete_people'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}


