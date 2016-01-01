<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Setting;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SettingController extends Controller
{
    public function index()
    {
        $persons = Setting::all();
        return view('dream.person.setting', ['persons' => $persons]);
    }

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
        return redirect("/dream/setting") ->with('message', '信息编辑成功！');
    }

    public function show($id)
    {
        $p = Setting::find($id);
        return view('dream.person.s_show', ['person' => $p]);
    }

    public function delete($id)
    {
        Setting::find($id)->delete();
        return redirect("/dream/setting")
            ->with('message', '信息删除成功！');
    }


    public function check(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $state = $request->input('state');
        //dd(empty($id),empty($name),empty($state));
        if (empty($id) && empty($name) && empty($state)) {
            $p = Setting::all();
        } else {
            $p = new Setting();
            if (!empty($id)) {
                $p = $p->where('id', '=', $id);
            }
            if (!empty($name)) {
                $p = $p->where('name', '=', $name);
            }
            if (!empty($state)) {
                $p = $p->where('state', '=', $state);
            }
            $p = $p->get();
        }
        return view('dream.person.setting', ['persons' => $p]);
    }

    public function bcheck()
    {
            $p=new Setting();
            return view('dream.person.s_check',['persons'=>$p]);
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=部门设置.xls");
        $data = DB::table('bm-setup')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}