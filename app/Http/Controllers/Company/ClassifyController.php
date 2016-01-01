<?php

namespace App\Http\Controllers\Company;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Classify;
use Illuminate\Support\Facades\DB;

class ClassifyController extends Controller
{
    public function index()
    {
        $companys=Classify::all();
        return view('dream.company.classify',['companys'=>$companys]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $c=Classify::find($id);
        } else{
            $c=new Classify();
        }
        return view('dream.company.cl_edit',['company'=>$c]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Classify::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Classify::create($request->input());
        }
        return redirect("/dream/classify");
    }

    public function show($id)
    {
        $c=Classify::find($id);
        return view('dream.company.cl_show',['company'=>$c]);
    }

    public function delete($id)
    {

        Classify::find($id)->delete();
        return redirect("/dream/classify")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=单位分类.xls");
        $data = DB::table('unit classification')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
