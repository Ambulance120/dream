<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\File;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function index()
    {
        $persons=File::all();
        return view('dream.person.file',['persons'=>$persons]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=File::find($id);
        } else{
            $p=new File();
        }
        return view('dream.person.f_edit',['person'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            File::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            File::create($request->input());
        }
        return redirect("/dream/file");
    }

    public function show($id)
    {
        $p=File::find($id);
        return view('dream.person.f_show',['person'=>$p]);
    }
    public function delete($id)
    {
        File::find($id)->delete();
        return redirect("/dream/file")
            ->with('message', '信息删除成功！');
    }


    public function check(Request $request)
    {
        $id=$request->input('id');
        $name=$request->input('name');
        $sex=$request->input('sex');
        $department=$request->input('department');
        $title=$request->input('title');//职称
        $p_attribute=$request->input('p_attribute');//人员属性
        $p_category=$request->input('p_category');//人员类别

        //dd(empty($id),empty($name),empty($state));
        if (empty($id)&&empty($name)&&empty($sex)&&empty($department)&&empty($title)&&empty($p_attribute)&&empty($p_category))
        {
            $p = File::all();
        }
        else{
            $p = new File();
            if (!empty($id)) {
                $p= $p->where('id','=',$id);
            }
            if (!empty($name)) {
                $p= $p->where('name','=',$name);
            }
            if (!empty($sex)) {
                $p= $p->where('sex','=',$sex);
            }
            if (!empty($department)) {
                $p= $p->where('department','=',$department);
            }
            if (!empty($title)) {
                $p= $p->where('title','=',$title);
            }
            if (!empty($p_attribute)) {
                $p= $p->where('p_attribute','=',$p_attribute);
            }
            if (!empty($p_category)) {
                $p= $p->where('p_category','=',$p_category);
            }
            $p=$p->get();
        }
        return view('dream.person.file', ['persons' =>$p]);
    }


    public function bcheck()
    {
        $p=new File();
        return view('dream.person.f_check',['persons'=>$p]);
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=人员档案.xls");
        $data = DB::table('personnel file')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
