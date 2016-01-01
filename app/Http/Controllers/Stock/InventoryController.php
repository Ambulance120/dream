<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Inventory;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index()
    {
        $stocks=Inventory::all();
        return view('dream.stock.inventory',['stocks'=>$stocks]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $s=Inventory::find($id);
        } else{
            $s=new Inventory();
        }
        return view('dream.stock.i_edit',['stock'=>$s]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Inventory::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Inventory::create($request->input());
        }
        return redirect("/dream/inventory");
    }

    public function show($id)
    {
        $s=Inventory::find($id);
        return view('dream.stock.i_show',['stock'=>$s]);
    }

    public function delete($id)
    {

        Inventory::find($id)->delete();
        return redirect("/dream/inventory")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=存货分类.xls");
        $data = DB::table('inventory category')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
