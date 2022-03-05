<?php

namespace App\Http\Controllers;

use App\Models\thucdon;
use App\Models\thongbao;
use Illuminate\Http\Request;

class ThucdonController extends Controller
{
    public function index()
    {
        $result['data']=thucdon::all();
        return view('admin/thucdon',$result);
    }
    
    public function themthucdon(Request $request,$mathucdon='')
    {
        
        if($mathucdon>0)
        {
            $arr=thucdon::where(['mathucdon'=>$mathucdon])->get();
            $result['mathucdon']=$arr['0']->mathucdon;
            $result['thu']=$arr['0']->thu;
            $result['trua']=$arr['0']->trua;
            $result['chieu']=$arr['0']->chieu;
        }
        else
        {
            
            
            $result['mathucdon']='';
            $result['thu']='';
            $result['trua']='';
            $result['chieu']='';
        }
        return view('admin/themthucdon',$result);
    }
    public function themthucdon_process(Request $request)
    {
        
        if($request->post('mathucdon')>0)
        {
            $model=thucdon::find($request->post('mathucdon'));

        }
        else
        {
            $model = new thucdon();

        }
        $model->mathucdon=$request->post('mathucdon');
        $model->thu=$request->post('thu');
        $model->trua=$request->post('trua');
        $model->chieu=$request->post('chieu');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 thực đơn');
        return redirect('admin/thucdon');
    }
    public function delete(Request $request,$mathucdon)
    {
        $model=thucdon::find($mathucdon);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 thực đơn');
        return redirect('admin/thucdon');

    }
    // trang khách

    public function show($mathucdon)
    {
        $list = thucdon::where('mathucdon','=',$mathucdon)->select('*')->first();
        return view('trangchu/dsthucdon',compact('list'));
    }
    public function index3() # su dug cho xemthemthucdon.blade.php phan thong bao
    {
        
        $result['data']=thucdon::all();
        $result['datathongbao']=thongbao::all();
        return view('trangchu/xemthemthucdon',$result);
    }
}
