<?php

namespace App\Http\Controllers\Other;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Shipping;
use Illuminate\Support\Facades\DB;

class ShippingController extends Controller
{
    public function index()
    {
        $others=Shipping::all();
        return view('dream.other.shipping',['others'=>$others]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $o=Shipping::find($id);
        } else{
            $o=new Shipping();
        }
        return view('dream.other.s_edit',['other'=>$o]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Shipping::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Shipping::create($request->input());
        }
        return redirect("/dream/shipping");
    }

    public function show($id)
    {
        $o=Shipping::find($id);
        return view('dream.other.s_show',['other'=>$o]);
    }

    public function delete($id)
    {

        Shipping::find($id)->delete();
        return redirect("/dream/shipping")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=发运方式.xls");
        $data = DB::table('shipping methods')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
