<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Conversion;
use Illuminate\Support\Facades\DB;
class ConversionController extends Controller
{
    public function index()
    {
        $stocks=Conversion::all();
        return view('dream.stock.conversion',['stocks'=>$stocks]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $s=Conversion::find($id);
        } else{
            $s=new Conversion();
        }
        return view('dream.stock.c_edit',['stock'=>$s]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Conversion::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Conversion::create($request->input());
        }
        return redirect("/dream/conversion");
    }

    public function show($id)
    {
        $s=Conversion::find($id);
        return view('dream.stock.c_show',['stock'=>$s]);
    }

    public function delete($id)
    {

        Conversion::find($id)->delete();
        return redirect("/dream/conversion")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=单位换算.xls");
        $data = DB::table('unit conversion')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
