<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'intercourse unit';
    public $primarkey='id';
    protected $dateFormat='U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'category','phone','address','p_contact','note','salesman','state','help','c_department','salesmen','tax','t_number','bank','b_number','discount','credit','create_person','create_time','change_person','change_time','stop_person','stop_time'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}

