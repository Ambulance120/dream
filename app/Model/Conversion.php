<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'unit conversion';
    public $primarkey='id';
    protected $dateFormat='U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'm_unit','a_unit','rate'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}


