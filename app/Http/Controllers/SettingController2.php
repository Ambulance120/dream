<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Setting3;

class SettingController2 extends Controller
{
    public function index3()
    {
        $persons = Setting3::all();
        return view('dream.setting3', ['persons' => $persons]);
    }
//     public function index4()
//     {
//         $persons = Setting1::all();
//         return view('dream.setting3-1', ['persons' => $persons]);
//     }
    public function show($id)
    {
        $b = Setting3::find($id);
        return view('dream.s3_show', ['b' => $b]);
    }
}