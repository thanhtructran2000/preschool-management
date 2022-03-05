<?php

namespace App\Http\Controllers;

use App\Models\giaovien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GiaovienController extends Controller
{
    public function index()
    {
        $result['data']= DB::table('giaoviens')->paginate(5);
        return view('admin/category',$result);
    }
    public function searchtrangadmin()
   {
       $search_text = $_GET['query'];
       $data = DB::table('giaoviens')->where('hotengv','LIKE','%'.$search_text.'%')->paginate();
       return view('admin/category',compact('data'));
   } 
    public function manage_category(Request $request,$magv='')
    {
        if($magv>0)
        {
            $arr=giaovien::where(['magv'=>$magv])->get();
            $result['magv']=$arr['0']->magv;
            $result['hotengv']=$arr['0']->hotengv;
            $result['ngaysinhgv']=$arr['0']->ngaysinhgv;
            $result['gioitinhgv']=$arr['0']->gioitinhgv;
            $result['trinhdogv']=$arr['0']->trinhdogv;
            $result['diachigv']=$arr['0']->diachigv;
            $result['sdt']=$arr['0']->sdt;
            $result['email']=$arr['0']->email;
            
        }
        else
        {
            $result['magv']='';
            $result['hotengv']='';
            $result['ngaysinhgv']='';
            $result['gioitinhgv']='';
            $result['trinhdogv']='';
            $result['diachigv']='';
            $result['sdt']='';
            $result['email']='';
            
        }
        return view('admin/manage_category',$result);
    }
    public function manage_category_process(Request $request)
    {
        #$request->validate([
        #  'hotengv'=>'required',
        #  'trinhdo'=>'required',
        #]);
        
        if($request->post('magv')>0)
        {
            $model=giaovien::find($request->post('magv'));

        }
        else
        {
            $model = new giaovien();

        }
        $model->magv=$request->post('magv');
        $model->hotengv=$request->post('hotengv');
        $model->ngaysinhgv=$request->post('ngaysinhgv');
        $model->gioitinhgv=$request->post('gioitinhgv');
        $model->trinhdogv=$request->post('trinhdogv');
        $model->diachigv=$request->post('diachigv');
        $model->sdt=$request->post('sdt');
        $model->email=$request->post('email');
       
        $model->save();
        $request->session()->flash('message','Đã thêm 1 giáo viên');
        return redirect('admin/category');
    }
    public function delete(Request $request,$magv)
    {
        $model=giaovien::find($magv);
        $model->delete();
        $request->session()->flash('message','đã xóa 1 giáo viên');
        return redirect('admin/category');

    }
    //trang khach
    public function index1()
    {
        $result['data'] = DB::table('giaoviens')->paginate(5);
        return view('trangchu/dsgvien',$result);
    }
    // trang khach tim kiem ten giáo viên
   public function search()
   {
       $search_text = $_GET['query'];
       $data = DB::table('giaoviens')->where('hotengv','LIKE','%'.$search_text.'%')->paginate();
       return view('trangchu/dsgvien',compact('data'));
   } 
}
