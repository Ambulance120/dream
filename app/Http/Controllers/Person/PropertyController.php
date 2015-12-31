<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Property;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $persons=Property::all();
        return view('dream.person.property',['persons'=>$persons]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Property::find($id);
        } else{
            $p=new Property();
        }
        return view('dream.person.p_edit',['person'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Property::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Property::create($request->input());
        }
        return redirect("/dream/property");
    }

    public function show($id)
    {
        $p=Property::find($id);
        return view('dream.person.p_show',['person'=>$p]);
    }

    public function delete($id)
    {

        Property::find($id)->delete();
        return redirect("/dream/property") ->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=人员属性.xls");
        $data = DB::table('personnel property')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
