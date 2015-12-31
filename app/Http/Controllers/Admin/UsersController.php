<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\model\UserModel;
use Illuminate\Http\Request as Request;
use App\Model\User as User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    protected $username = 'number';

    public function getRegister()
    {
        return view('dream.admin.register');
    }

    public function postRegister(request $request)
    {
        $rules = array(
        'number'=>'required|alpha|min:2|unique:users',
        'name'=>'required|alpha|min:2',
        'password'=>'required|alpha_num|between:6,8|confirmed',
        'password_confirmation'=>'required|alpha_num|between:6,8',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {
            $user = new User();
            $user->number= $request['number'];
            $user->name = $request['name'];
            $user->phone = $request['phone'];
            $user->industry = $request['industry'];
            $user->company = $request['company'];
            $user->address =$request['address'];
            $user->qq = $request['qq'];
            $user->email = $request['email'];
            $user->cnumber = $request['cnumber'];
            $user->password = Hash::make($request['password']);
            $user->save();
            return Redirect::to('auth/login')
                ->with('message', '注册成功，立即登录体验!');
        }
        else {
            return Redirect::to('/dream')
                ->withErrors($validator)
                ->with('message', '请您正确填写下列数据');
        }
    }

  /*  public function postRegister(request $request)
    {
        $date = User::where('number','=',$request['number'])->get();
        if(!isset($date)){
            return Redirect::to('/dream')
                ->with('message', '用户已存在')
                ->withInput();
        }
        $user = array();
            $user['number'] = $request['number'];
            $user['name'] = $request['name'];
            $user['phone'] = $request['phone'];
            $user['company'] = $request['company'];
            $user['address'] = $request['address'];
            $user['cnumber'] = $request['cnumber'];
            $user['qq'] = $request['qq'];
            $user['email'] = $request['email'];
            $user['password'] = Hash::make($request['password']);
            return Redirect::to('auth/login')
                ->with('message', '注册成功，欢迎加入我们!');
    }*/

    /**  * 返回login视图,登录页面  */
    public function getLogin()
    {
        return view('dream.admin.login');
    }

// 登录操作
    public function postLogin(request $request)

    {
        $number=$request['number'];
        $password=$request['password'];
        session_start();
        $_SESSION['username']=$request['number'];
       if (Auth::attempt(
            ['number' =>$number,
             'password' =>$password]))
        {
            return Redirect::to('dream/home')
                ->with('message', '欢迎用户 "'.$number.' "登录!');
        } else {
            return Redirect::to('auth/login')
                ->with('message', '用户名或密码错误')
                ->withInput();
        }
    }
   /* public function postLogin(request $request)
    {
        //dd($request['number'],$request['password']);
        $date = User::where('number','=',$request['number'])->get();
        //dd($date[0]['password']);
        if(!$date){
            exit;
        }
        $password =Hash::make($request['password']);
        if ($request['password']=$date[0]['password']
        ) {
            session_start();
            $_SESSION['username']=$request['number'];
            return Redirect::to('dream/setting')->with('message','用户已成功登陆');
        } else {
            return Redirect::to('auth/login')
                ->with('message', '用户名或密码错误')
                ->withInput();
        }

    }*/

    // 登出
  /*  public function getLogout()
    {
        $_SESSION["username"]=NULL;
        return Redirect::to('auth/login')
            ->with('message', '你现在已经退出登录了!');
    }*/
    public function getLogout(){
        if(Auth::check())
        {
            Auth::logout();
        }
        return Redirect::to('auth/login')
            ->with('message','你现在已经退出登录了!');
    }

    public function Message(){
        return view('dream.admin.user_message');
    }
}
