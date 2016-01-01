<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personnel file';
    public $primarkey='id';
    protected $dateFormat='U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'department','sex','position','phone','telphone','email','note','title','bank','state','img','d_number','d_type','bank_number','p_category','birthday','help_number','p_attribute','major','home_number','ungent_call','ungent_contact','bank2','bank_number2','create_time','create_person','occupation','place','address','fund_number','insurance_number','change_time','change_person','stop_time','stop_person','start_time','start_person','education','zip_code'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}


