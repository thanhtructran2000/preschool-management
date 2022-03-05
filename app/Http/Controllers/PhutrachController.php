<?php

namespace App\Http\Controllers;

use App\Models\phutrach;
use App\Models\giaovien;
use App\Models\lop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhutrachController extends Controller
{
    
    public function index()
    {
        $result['data'] = DB::table('phutraches')->join('giaoviens','giaoviens.magv','=','phutraches.magv')->join('lops','lops.malop','=','phutraches.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(5);
        return view('admin/phutrach',$result);
    }
    public function searchtrangadmin()
   {
       $search_text = $_GET['query'];
       $data = DB::table('phutraches')->join('giaoviens','giaoviens.magv','=','phutraches.magv')->join('lops','lops.malop','=','phutraches.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('giaoviens.hotengv','LIKE','%'.$search_text.'%')->paginate(3);
       return view('admin/phutrach',compact('data'));
   } 
    public function themphutrach(Request $request,$maphutrach='')
    {
        
        if($maphutrach>0)
        {
            $arr=phutrach::where(['maphutrach'=>$maphutrach])->get();
            $result['maphutrach']=$arr['0']->maphutrach;
            $result['magv']=$arr['0']->magv;
            $result['malop']=$arr['0']->malop;
        }
        else
        {
            
            
            $result['maphutrach']='';
            $result['magv']='';
            $result['malop']='';
        }
        $result['datamagv'] = DB::table('giaoviens')->select('magv','hotengv')->get();
        $result['datamalop'] = DB::table('lops')->select('malop','tenlop')->get();
        return view('admin/themphutrach',$result);
    }
    public function themphutrach_process(Request $request)
    {
        #$request->validate([
        #  'hotengv'=>'required',
        #  'trinhdo'=>'required',
        #]);
       
        if($request->post('maphutrach')>0)
        {
            $model=phutrach::find($request->post('maphutrach'));

        }
        else
        {
            $model = new phutrach();

        }
        $model->maphutrach=$request->post('maphutrach');
        $model->magv=$request->post('magv');
        $model->malop=$request->post('malop');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 giáo viên phụ trách lớp');
        return redirect('admin/phutrach');
    }
    public function delete(Request $request,$maphutrach)
    {
        $model=phutrach::find($maphutrach);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 giáo viên phụ trách lớp');
        return redirect('admin/phutrach');

    }
    public function index1()
    {
        $result['data'] = DB::table('phutraches')->join('giaoviens','giaoviens.magv','=','phutraches.magv')->join('lops','lops.malop','=','phutraches.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(5);
        return view('trangchu/phutrachlophoc',$result);
    }
    // trang khach tim kiem ten giáo viên chủ nhiệm
   public function search()
   {
       $search_text = $_GET['query'];
       $data = DB::table('phutraches')->join('giaoviens','giaoviens.magv','=','phutraches.magv')->join('lops','lops.malop','=','phutraches.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('giaoviens.hotengv','LIKE','%'.$search_text.'%')->paginate(3);
       return view('trangchu/phutrachlophoc',compact('data'));
   } 
}
