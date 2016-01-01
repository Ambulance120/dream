<?php

namespace App\Http\Controllers\Company;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Locale;
use Illuminate\Support\Facades\DB;

class LocaleController extends Controller
{
    public function index()
    {
        $companys=Locale::all();
        return view('dream.company.locale',['companys'=>$companys]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $c=Locale::find($id);
        } else{
            $c=new Locale();
        }
        return view('dream.company.l_edit',['company'=>$c]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Locale::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Locale::create($request->input());
        }
        return redirect("/dream/locale");
    }

    public function show($id)
    {
        $c=Locale::find($id);
        return view('dream.company.l_show',['company'=>$c]);
    }

    public function delete($id)
    {

        Locale::find($id)->delete();
        return redirect("/dream/locale")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=地区设置.xls");
        $data = DB::table('locale')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
