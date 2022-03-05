<?php

namespace App\Http\Controllers;
use App\Models\lop;
use App\Models\khoahoc;
use App\Models\thongbao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LopController extends Controller
{
    public function index()
    {
        #$result['data']=lop::all();
        $result['data'] = DB::table('lops')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(4);
        return view('admin/lop',$result);
    }
    public function searchtrangadmin()
   {
       $search_text = $_GET['query'];
       #$data = lop::where('tenlop','LIKE','%'.$search_text.'%')->get(); 
       $data = DB::table('lops')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('tenlop','LIKE','%'.$search_text.'%')->paginate(4);
       return view('admin/lop',compact('data'));
   } 
   public function showtrangadmin($malop)
    {
        #$list = ::where('mathongbao','=',$mathongbao)->select('*')->first();
        $data=  DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hocsinhs.malop','=',$malop)->paginate(10);
        return view('admin/hocsinh',compact('data'));
    }
    public function themlop(Request $request,$malop='')
    {
        if($malop>0)
        {
            $arr=lop::where(['malop'=>$malop])->get();
            $result['malop']=$arr['0']->malop;
            $result['tenlop']=$arr['0']->tenlop;
            $result['siso']=$arr['0']->siso;
            $result['makhoa']=$arr['0']->makhoa;
        }
        else
        {
            $result['malop']='';
            $result['tenlop']='';
            $result['siso']='';
            $result['makhoa']='';
        }
        $result['datamakhoa'] = DB::table('khoahocs')->select('makhoa')->get();
        $result['data'] = DB::table('lops')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->get();
        return view('admin/themlop',$result);

    }
    public function themlop_process(Request $request)
    {
        if($request->post('malop')>0)
        {
            $model=lop::find($request->post('malop'));

        }
        else
        {
            $model = new lop();

        }
        $model->malop=$request->post('malop');
        $model->tenlop=$request->post('tenlop');
        $model->siso=$request->post('siso');
        $model->makhoa=$request->post('makhoa');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 lớp học');
        return redirect('admin/lop');
    }
    public function delete(Request $request,$malop)
    {
        $model=lop::find($malop);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 lớp học');
        return redirect('admin/lop');

    }
    //trang khach
    public function index1()
    {
        #$result['data']=lop::all();
        $result['data'] = DB::table('lops')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(5);
        $result['datathongbao']=thongbao::all();
        return view('trangchu/dslop',$result);
    }
    public function show($malop)
    {
        #$list = ::where('mathongbao','=',$mathongbao)->select('*')->first();
        $data=  DB::table('hocsinhs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hocsinhs.malop','=',$malop)->paginate(10);
        return view('trangchu/dshocsinh',compact('data'));
    }
    // trang khach tim kiem ten lop
   public function search()
   {
       $search_text = $_GET['query'];
       $result['datathongbao']=thongbao::all();
       #$data = lop::where('tenlop','LIKE','%'.$search_text.'%')->get(); 
       $result['data'] = DB::table('lops')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('tenlop','LIKE','%'.$search_text.'%')->paginate();
       return view('trangchu/dslop',$result);
   } 
}
