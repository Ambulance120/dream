<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Setup;
use Illuminate\Support\Facades\DB;

class SetupController extends Controller
{
    public function index()
    {
        $stocks=Setup::all();
        return view('dream.stock.setup',['stocks'=>$stocks]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $s=Setup::find($id);
        } else{
            $s=new Setup();
        }
        return view('dream.stock.s_edit',['stock'=>$s]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Setup::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Setup::create($request->input());
        }
        return redirect("/dream/setup");
    }

    public function show($id)
    {
        $s=Setup::find($id);
        return view('dream.stock.s_show',['stock'=>$s]);
    }

    public function delete($id)
    {

        Setup::find($id)->delete();
        return redirect("/dream/setup")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=仓库设置.xls");
        $data = DB::table('ck-setup')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
