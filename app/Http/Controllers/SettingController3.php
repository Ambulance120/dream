<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Setting1;

class SettingController3 extends Controller
{

     public function index4()
     {
         $persons = Setting1::all();
         return view('dream.setting3-1', ['persons' => $persons]);
     }
     public function index5()
     {
         $persons = Setting2::all();
         return view('dream.setting3-2', ['persons' => $persons]);
     }
    public function show($id)
    {
        $c = Setting1::find($id);
        return view('dream.s4_show', ['c' => $c]);
    }
}