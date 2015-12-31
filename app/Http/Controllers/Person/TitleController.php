<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Title;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    public function index()
    {
        $persons=Title::all();
        return view('dream.person.title',['persons'=>$persons]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Title::find($id);
        } else{
            $p=new Title();
        }
        return view('dream.person.t_edit',['person'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Title::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Title::create($request->input());
        }
        return redirect("/dream/title");
    }

    public function show($id)
    {
        $p=Title::find($id);
        return view('dream.person.t_show',['person'=>$p]);
    }

    public function delete($id)
    {

        Title::find($id)->delete();
        return redirect("/dream/title") ->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=职称.xls");
        $data = DB::table('title')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
