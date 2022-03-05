<?php

namespace App\Http\Controllers;

use App\Models\khoahoc;
use App\Models\thongbao;
use Illuminate\Http\Request;

class KhoahocController extends Controller
{
    public function index()
    {
        $result['data']=khoahoc::all();
        return view('admin/khoahoc',$result);
    }
    
    public function themkhoahoc(Request $request,$makhoa='')
    {
        
        if($makhoa>0)
        {
            $arr=khoahoc::where(['makhoa'=>$makhoa])->get();
            $result['makhoa']=$arr['0']->makhoa;
            $result['hocki']=$arr['0']->hocki;
            $result['namhoc']=$arr['0']->namhoc;
        }
        else
        {
            
            
            $result['makhoa']='';
            $result['hocki']='';
            $result['namhoc']='';
        }
        return view('admin/themkhoahoc',$result);
    }
    public function themkhoahoc_process(Request $request)
    {
        
        if($request->post('makhoa')>0)
        {
            $model=khoahoc::find($request->post('makhoa'));

        }
        else
        {
            $model = new khoahoc();

        }
        $model->makhoa=$request->post('makhoa');
        $model->hocki=$request->post('hocki');
        $model->namhoc=$request->post('namhoc');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 khóa học');
        return redirect('admin/khoahoc');
    }
    public function delete(Request $request,$makhoa)
    {
        $model=khoahoc::find($makhoa);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 khoá học');
        return redirect('admin/khoahoc');

    }
    //trang khach
    public function index1()
    {
        $result['data']=khoahoc::all();
        $result['datathongbao']=thongbao::all();
        return view('trangchu/dskhoahoc',$result);

    }

}
