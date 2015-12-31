<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Setting;

class Setting1Controller extends Controller
{
    public function index()
    {
        $persons=Setting::all();
        return view('dream.person.setting1',['persons'=>$persons]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Setting::find($id);
        } else{
            $p=new Setting();
        }
        return view('dream.person.setting1',['person'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        //dd($request->all());
        if(isset($id)){
            Setting::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Setting::create($request->input());
        }
        return redirect("/dream/setting1");
    }

    public function show($id)
    {
        $p=Setting::find($id);
        return view('dream.person.setting1',['person'=>$p]);
    }

    public function delete($id)
    {

        Setting::find($id)->delete();
        return redirect("/dream/setting1");
    }

}
