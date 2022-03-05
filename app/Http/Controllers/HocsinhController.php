<?php

namespace App\Http\Controllers;
use App\Models\lop;
use App\Models\hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HocsinhController extends Controller
{
    public function index()
    {
        $result['data']=  DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(10);
        return view('admin/hocsinh',$result);
    }
    public function searchtrangadmin()
   {
       $search_text = $_GET['query'];
       $data = DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hotenhs','LIKE','%'.$search_text.'%')->paginate(4);
       return view('admin/hocsinh',compact('data'));
   } 
    public function themhocsinh(Request $request,$mahs='')
    {
        if($mahs>0)
        {
            $arr=hocsinh::where(['mahs'=>$mahs])->get();
            $result['mahs']=$arr['0']->mahs;
            $result['hotenhs']=$arr['0']->hotenhs;
            $result['diachihs']=$arr['0']->diachihs;
            $result['ngaysinhhs']=$arr['0']->ngaysinhhs;
            $result['gioitinhhs']=$arr['0']->gioitinhhs;
            $result['chieucao']=$arr['0']->chieucao;
            $result['cannang']=$arr['0']->cannang;
            $result['malop']=$arr['0']->malop;
        }
        else
        {
            $result['mahs']='';
            $result['hotenhs']='';
            $result['diachihs']='';
            $result['ngaysinhhs']='';
            $result['gioitinhhs']='';    
            $result['chieucao']=''; 
            $result['cannang']='';
            $result['malop']='';
           
        }
        
       $result['datamalop'] = DB::table('lops')->select('malop','tenlop')->get();
       



        return view('admin/themhocsinh',$result);
    }
    public function themhocsinh_process(Request $request)
    {
        #$request->validate([
        #  'hotengv'=>'required',
        #  'trinhdo'=>'required',
        #]);
        
        if($request->post('mahs')>0)
        {
            $model=hocsinh::find($request->post('mahs'));

        }
        else
        {
            $model = new hocsinh();

        }
        $model->mahs=$request->post('mahs');
        $model->hotenhs=$request->post('hotenhs');
        $model->diachihs=$request->post('diachihs');
        $model->ngaysinhhs=$request->post('ngaysinhhs');
        $model->gioitinhhs=$request->post('gioitinhhs');
        $model->chieucao=$request->post('chieucao');
        $model->cannang=$request->post('cannang');
        $model->malop=$request->post('malop');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 học sinh');
        return redirect('admin/hocsinh');
    }
    public function delete(Request $request,$mahs)
    {
        $model=hocsinh::find($mahs);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 học sinh');
        return redirect('admin/hocsinh');

    }
    //trang khach
    public function index1()
    {
        $result['data']=  DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(10);
        return view('trangchu/dshocsinh',$result);
    }
    // trang khach tim kiem ten lop
   public function search()
   {
       $search_text = $_GET['query'];
       #$data = lop::where('tenlop','LIKE','%'.$search_text.'%')->get(); 
       $data = DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hotenhs','LIKE','%'.$search_text.'%')->paginate(4);
       return view('trangchu/dshocsinh',compact('data'));
   } 
}