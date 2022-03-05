<?php

namespace App\Http\Controllers;
use Session;
Session_start();
use App\Models\dangnhap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class DangnhapController extends Controller
{
    public function index()
    {
        
        return view('admin.login');
    }
    public function auth(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        #$result=dangnhap::where(['username'=>$username,'password'=>$password])->get();
        $result=dangnhap::where(['username'=>$username])->first();
        if($result)
        {
            if(Hash::check($request->post('password'),$result->password))
            {
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('admin');
            }
            
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
        #if(isset($result['0']->id))
        #{
          //$request->session()->put('DANGNHAP',true);
          //$request->session()->put('DANGNHAP',$request['0']->id);
         # return redirect('admin/dashboard');

        #}else{
         #   $request->session()->flash('error','Please enter valid login details');
         #   return redirect('admin');
        #}
    }
    public function dashboard()
    {
    
        return view('admin.dashboard');
    }
    #public function updatepassword()
    #{
     #   $r=dangnhap::find(1);
     #   $r->password=Hash::make('123');
     #   $r->save();
        
    #}
    #public function dangky1()
    #{
    #    return view('admin.dangky');
    #}
    public function dangky(Request $request)
    {
    
          $request->validate([
            'username'=>'required',
            'password'=>'required',
          ]);
          $model = new dangnhap();
          $model->username=$request->post('username');
          $model->password=$request->post('password');
          $model->save();
          #$request->session()->flash('message','category inserted');
          return redirect('admin');
      }
    


}
