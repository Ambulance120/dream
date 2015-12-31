<?php

namespace App\Http\Controllers\Other;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Vocabulary;
use Illuminate\Support\Facades\DB;

class VocabularyController extends Controller
{
    public function index()
    {
        $others=Vocabulary::all();
        return view('dream.other.vocabulary',['others'=>$others]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $o=Vocabulary::find($id);
        } else{
            $o=new Vocabulary();
        }
        return view('dream.other.v_edit',['other'=>$o]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Vocabulary::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Vocabulary::create($request->input());
        }
        return redirect("/dream/vocabulary");
    }

    public function show($id)
    {
        $o=Vocabulary::find($id);
        return view('dream.other.v_show',['other'=>$o]);
    }

    public function delete($id)
    {

        Vocabulary::find($id)->delete();
        return redirect("/dream/vocabulary")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=常用词汇.xls");
        $data = DB::table('vocabulary')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
