<?php

namespace App\Http\Controllers;

use App\Models\dangnhapuser;
use Illuminate\Http\Request;

class DangnhapuserController extends Controller
{
    public function index()
    {
        return view('trangchu.dangnhap');
    }
    public function authuser(Request $request)
    {
        $uname = $request->post('uname');
        $pass = $request->post('pass');
        $result=dangnhapuser::where(['uname'=>$uname,'pass'=>$pass])->get();
        if(isset($result['0']->id))
        {
          //$request->session()->put('DANGNHAP',true);
          //$request->session()->put('DANGNHAP',$request['0']->id);
          return redirect('/trangchu');

        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('/dangnhap');
        }
    }
    public function trangchu()
    {
        return view('trangchu.trangchu1');
    }
    public function dangky1()
    {
        return view('trangchu.dangky');
    }
    public function dangky(Request $request)
    {
          $request->validate([
            'uname'=>'required',
            'pass'=>'required',
          ]);
          $model = new dangnhapuser();
          $model->uname=$request->post('uname');
          $model->pass=$request->post('pass');
          $model->email=$request->post('email');
          $model->save();
          #$request->session()->flash('message','category inserted');
          return redirect('dangnhap');
      }
    
}
