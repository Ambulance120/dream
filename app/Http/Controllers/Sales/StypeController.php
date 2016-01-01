<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Redirect;
use App\Model\Stype;
use Illuminate\Support\Facades\DB;

class StypeController extends Controller
{
    public function index()
    {
        $sales=Stype::all();
        return view('dream.sales.stype',['sales'=>$sales]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $s=Stype::find($id);
        } else{
            $s=new Stype();
        }
        return view('dream.sales.s_edit',['sales'=>$s]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Stype::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Stype::create($request->input());
        }
        return redirect("/dream/stype");
    }

    public function show($id)
    {
        $s=Stype::find($id);
        return view('dream.sales.s_show',['sales'=>$s]);
    }

    public function delete($id)
    {

        Stype::find($id)->delete();
        //return redirect("/dream/stype");
        return Redirect::to('/dream/stype')
            ->with('message', '数据删除成功');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=销售类型.xls");
        $data = DB::table('sales type')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
