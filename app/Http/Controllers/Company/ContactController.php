<?php

namespace App\Http\Controllers\Company;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use App\Model\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $companys=Contact::all();
        return view('dream.company.contact',['companys'=>$companys]);
    }

    public function edit($id=null)
    {
        if(isset($id)){
            $c=Contact::find($id);
        } else{
            $c=new Contact();
        }
        return view('dream.company.c_edit',['company'=>$c]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Contact::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Contact::create($request->input());
        }
        return redirect("/dream/contact");
    }

    public function show($id)
    {
        $c=Contact::find($id);
        return view('dream.company.c_show',['company'=>$c]);
    }

    public function delete($id)
    {

        Contact::find($id)->delete();
        return redirect("/dream/contact") ->with('message', '信息删除成功！');
    }

    public function check(Request $request)
    {
        $category=$request->input('category');
        $id=$request->input('id');
        $name=$request->input('name');
        $salesman=$request->input('salesman');
        //dd(empty($id),empty($name),empty($state));
        if (empty($category)&&empty($id)&&empty($name)&&empty($salesman))
        {
            $p =Contact::all();
        }
        else{
            $p = new Contact();
            if (!empty($category)) {
                $p= $p->where('category','=',$category);
            }
            if (!empty($id)) {
                $p= $p->where('id','=',$id);
            }
            if (!empty($name)) {
                $p= $p->where('name','=',$name);
            }
            if (!empty($salesman)) {
                $p= $p->where('salesman','=',$salesman);
            }
            $p=$p->get();
        }
        return view('dream.company.contact', ['companys' =>$p]);
    }


    public function bcheck()
    {
        $p=new Contact();
        return view('dream.company.c_check',['companys'=>$p]);
    }

    public function excel(){
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=往来单位.xls");
        $data = DB::table('intercourse unit')->get();
        //print_r($data);die;
        foreach($data as $d){
            foreach($d as $v){
                echo $v."\t";
            }
            echo "\n";
        }
    }
}
