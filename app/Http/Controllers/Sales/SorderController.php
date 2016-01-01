<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Redirect;
use App\Model\Sorder;
use Illuminate\Support\Facades\DB;

class SorderController extends Controller
{
    public function index()
    {
        $sales=Sorder::all();
        return view('dream.sales.sorder',['sales'=>$sales]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $s=Sorder::find($id);
        } else{
            $s=new Sorder();
        }
        return view('dream.sales.so_edit',['sales'=>$s]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Sorder::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Sorder::create($request->input());
        }
        return redirect("/dream/sorder");
    }

    public function show($id)
    {
        $s=Sorder::find($id);
        return view('dream.sales.so_show',['sales'=>$s]);
    }

    public function delete($id)
    {
        Sorder::find($id)->delete();
        //return redirect("/dream/stype");
        return Redirect::to('/dream/sorder')
            ->with('message', '数据删除成功');
    }

    public function check(Request $request)
    {
        $number=$request->input('number');
        $department=$request->input('department');
        $client=$request->input('client');
        $seller=$request->input('seller');
        $flag=$request->input('flag');
        $state=$request->input('state');
        //dd(empty($id),empty($name),empty($state));
        if (empty($number)&&empty($client)&&empty($department)&&empty($seller)&&empty($flag)&&empty($state))
        {
            $p = Sorder::all();
        }
        else{
            $p = new Sorder();
            if (!empty($number)) {
                $p= $p->where('number','=',$number);
            }
            if (!empty($client)) {
                $p= $p->where('client','=',$client);
            }
            if (!empty($department)) {
                $p= $p->where('department','=',$department);
            }
            if (!empty($seller)) {
                $p= $p->where('seller','=',$seller);
            }
            if (!empty($flag)) {
                $p= $p->where('flag','=',$flag);
            }
            if (!empty($state)) {
                $p= $p->where('state','=',$state);
            }
            $p=$p->get();
        }
        return view('dream.sales.sorder', ['sales' =>$p]);
    }


    public function bcheck()
    {
        $p=new Sorder();
        return view('dream.sales.so_check',['sales'=>$p]);
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=销售单.xls");
        $data = DB::table('sales order')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
