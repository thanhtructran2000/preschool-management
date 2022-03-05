<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\phuhuynh;
use Illuminate\Http\Request;

class PhuhuynhController extends Controller
{
    public function index()
    {
        $result['data'] = DB::table('phuhuynhs')->join('hocsinhs','hocsinhs.mahs','=','phuhuynhs.mahs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(5);
        return view('admin/phuhuynh',$result);
    }
    public function searchtrangadmin()
    {
        $search_text = $_GET['query'];
        
        $data = DB::table('phuhuynhs')->join('hocsinhs','hocsinhs.mahs','=','phuhuynhs.mahs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hotenph','LIKE','%'.$search_text.'%')->paginate(3);
        return view('admin/phuhuynh',compact('data'));
    } 
    public function themphuhuynh(Request $request,$maph='')
    {
        
        if($maph>0)
        {
            $arr=phuhuynh::where(['maph'=>$maph])->get();
            $result['maph']=$arr['0']->maph;
            $result['hotenph']=$arr['0']->hotenph;
            $result['gioitinhph']=$arr['0']->gioitinhph;
            $result['diachiph']=$arr['0']->diachiph;
            $result['sdt']=$arr['0']->sdt;
            $result['email']=$arr['0']->email;
            $result['mahs']=$arr['0']->mahs;
        }
        else
        {
            
            
            $result['maph']='';
            $result['hotenph']='';
            $result['gioitinhph']='';
            $result['diachiph']='';
            $result['sdt']='';
            $result['email']='';
            $result['mahs']='';
        }
        $result['datamahs'] = DB::table('hocsinhs')->select('mahs','hotenhs')->get();
        return view('admin/themphuhuynh',$result);
    }
    public function themphuhuynh_process(Request $request)
    {
        #$request->validate([
        #  'hotengv'=>'required',
        #  'trinhdo'=>'required',
        #]);
       
        if($request->post('maph')>0)
        {
            $model=phuhuynh::find($request->post('maph'));

        }
        else
        {
            $model = new phuhuynh();

        }
        $model->maph=$request->post('maph');
        $model->hotenph=$request->post('hotenph');
        $model->gioitinhph=$request->post('gioitinhph');
        $model->diachiph=$request->post('diachiph');
        $model->sdt=$request->post('sdt');
        $model->email=$request->post('email');
        $model->mahs=$request->post('mahs');
        $model->save();
        $request->session()->flash('message','Đã thêm 1 thông tin phụ huynh');
        return redirect('admin/phuhuynh');
    }
    public function delete(Request $request,$maphuhuynh)
    {
        $model=phuhuynh::find($maphuhuynh);
        $model->delete();
        $request->session()->flash('message','Đã xóa 1 thông tin phụ huynh');
        return redirect('admin/phuhuynh');

    }
    //trang khach
    public function index1()
    {
        
        #$result['data'] = DB::table('phuhuynhs')->join('hocsinhs','hocsinhs.mahs','=','phuhuynhs.mahs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->get();
        $result['data'] = DB::table('phuhuynhs')->join('hocsinhs','hocsinhs.mahs','=','phuhuynhs.mahs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->paginate(5);
        return view('trangchu/dsphuhuynh',$result);
    }
    // trang khach tim kiem ten phụ huynh
   public function search()
   {
       $search_text = $_GET['query'];
       
       $data = DB::table('phuhuynhs')->join('hocsinhs','hocsinhs.mahs','=','phuhuynhs.mahs')->join('lops','lops.malop','=','hocsinhs.malop')->join('khoahocs','khoahocs.makhoa','=','lops.makhoa')->where('hotenph','LIKE','%'.$search_text.'%')->paginate();
       return view('trangchu/dsphuhuynh',compact('data'));
   } 
}
