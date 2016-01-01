<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Basket;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index()
    {
        $purchase=Basket::all();
        return view('dream.purchase.basket',['purchase'=>$purchase]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Basket::find($id);
        } else{
            $p=new Basket();
        }
        return view('dream.purchase.b_edit',['purchase'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Basket::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Basket::create($request->input());
        }
        return redirect("/dream/basket");
    }

    public function show($id)
    {
        $p=Basket::find($id);
        return view('dream.purchase.b_show',['purchase'=>$p]);
    }

    public function delete($id)
    {

        Basket::find($id)->delete();
        return redirect("/dream/basket")
               ->with('message', '删除数据成功');
    }

    public function check(Request $request)
    {
        $number=$request->input('number');
        $supplier=$request->input('supplier');
        $department=$request->input('department');
        $buyer=$request->input('buyer');
        $flag=$request->input('flag');
        $state=$request->input('state');
        //dd(empty($id),empty($name),empty($state));
        if (empty($number)&&empty($supplier)&&empty($department)&&empty($buyer)&&empty($flag)&&empty($state))
        {
            $p = Basket::all();
        }
        else{
            $p = new Basket();
            if (!empty($number)) {
                $p= $p->where('number','=',$number);
            }
            if (!empty($supplier)) {
                $p= $p->where('supplier','=',$supplier);
            }
            if (!empty($department)) {
                $p= $p->where('department','=',$department);
            }
            if (!empty($buyer)) {
                $p= $p->where('buyer','=',$buyer);
            }
            if (!empty($flag)) {
                $p= $p->where('flag','=',$flag);
            }
            if (!empty($state)) {
                $p= $p->where('state','=',$state);
            }
            $p=$p->get();
        }
        return view('dream.purchase.basket', ['purchase' =>$p]);
    }


    public function bcheck()
    {
        $p=new Basket();
        return view('dream.purchase.b_check',['purchase'=>$p]);
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=进货单.xls");
        $data = DB::table('basket')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
