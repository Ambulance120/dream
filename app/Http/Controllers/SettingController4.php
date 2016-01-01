<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Setting2;

class SettingController4 extends Controller
{

//     public function index4()
//     {
//         $persons = Setting1::all();
//         return view('dream.setting3-1', ['persons' => $persons]);
//     }
     public function index5()
     {
         $persons = Setting2::all();
         return view('dream.setting3-2', ['persons' => $persons]);
     }
    public function show($id)
    {
        $s = Setting2::find($id);
        return view('dream.s5_show', ['s' => $s]);
    }
}