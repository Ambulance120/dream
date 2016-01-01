<?php

namespace App\Http\Controllers\Person;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $persons=Category::all();
        return view('dream.person.category',['persons'=>$persons]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $p=Category::find($id);
        } else{
            $p=new Category();
        }
        return view('dream.person.c_edit',['person'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Category::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Category::create($request->input());
        }
        return redirect("/dream/category");
    }

    public function show($id)
    {
        $p=Category::find($id);
        return view('dream.person.c_show',['person'=>$p]);
    }

    public function delete($id)
    {

        Category::find($id)->delete();
        return redirect("/dream/category")->with('message', '信息删除成功！');
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=人员类别.xls");
        $data = DB::table('personnel category')->get();
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }

}
