<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Setting;
use App\Model\Setting3;


class SettingController extends Controller
{
    public function index()
    {
        $persons = Setting::all();
        return view('dream.master', ['persons' => $persons]);
    }
    public function index1()
    {
        $persons = Setting::all();
        return view('dream.setting1', ['persons' => $persons]);
    }

    public function index2()
    {
        $persons = Setting::all();
        return view('dream.setting2', ['persons' => $persons]);
    }
    public function index3()
    {
        $persons = Setting3::all();
        return view('dream.setting3', ['persons' => $persons]);
    }
   /* public function index4()
    {
        $persons = Setting::all();
        return view('dream.setting3-1', ['persons' => $persons]);
    }
    public function index5()
    {
        $persons = Setting::all();
        return view('dream.setting3-2', ['persons' => $persons]);
    }*/
    public function edit($id = null)
    {
        if (isset($id)) {
            $p = Setting::find($id);
        } else {
            $p = new Setting();
        }
        return view('dream.person.s_edit', ['person' => $p]);
    }

    public function save(Request $request, $id = null)
    {
        if (isset($id)) {
            Setting::updateOrCreate(["id" => $id], $request->input());
        } else {
            Setting::create($request->input());
        }
        return redirect("/dream/setting");
    }

    public function show($id)
    {
        $j = Setting::find($id);
        return view('dream.s_show', ['j' => $j]);
    }


}