<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Type;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index()
    {
        $purchase=Type::all();
        return view('dream.purchase.type',['purchase'=>$purchase]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Type::find($id);
        } else{
            $p=new Type();
        }
        return view('dream.purchase.t_edit',['purchase'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Type::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Type::create($request->input());
        }
        return redirect("/dream/type");
    }

    public function show($id)
    {
        $p=Type::find($id);
        return view('dream.purchase.t_show',['purchase'=>$p]);
    }

    public function delete($id)
    {

        Type::find($id)->delete();
        return redirect("/dream/type")->with('message', '删除数据成功');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=采购类型.xls");
        $data = DB::table('purchase type')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
