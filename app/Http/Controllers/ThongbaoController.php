<?php

namespace App\Http\Controllers;

use App\Models\thongbao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThongbaoController extends Controller
{
    public function index()
    {
        $result['data']=thongbao::all();
        return view('admin/thongbao',$result);
    }

    
    
    public function themthongbao(Request $request,$mathongbao='')
    {
        if($mathongbao>0){
            $arr=thongbao::where(['mathongbao'=>$mathongbao])->get(); 

            $result['mathongbao']=$arr['0']->mathongbao;
            $result['tieude']=$arr['0']->tieude;
            $result['nguoidang']=$arr['0']->nguoidang;
            $result['ngaydang']=$arr['0']->ngaydang;
            $result['noidung']=$arr['0']->noidung;
            $result['image']=$arr['0']->image;
            
           
        }else{
           
            $result['mathongbao']='';
            $result['tieude']='';
            $result['nguoidang']='';
            $result['ngaydang']='';
            $result['noidung']='';
            $result['image']='';
        }
        return view('admin/themthongbao',$result);
    }

    public function themthongbao_process(Request $request)
    {
        //return $request->post();
        if($request->post('mathongbao')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'tieude'=>'required',
            'image'=>$image_validation,
        ]);

        if($request->post('mathongbao')>0){
            $model=thongbao::find($request->post('mathongbao'));
            $msg="Thông báo updated";
        }else{
            $model=new thongbao();
            $msg="Thông báo inserted";
        }

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }

        $model->mathongbao=$request->post('mathongbao');
        $model->tieude=$request->post('tieude');
        $model->nguoidang=$request->post('nguoidang');
        $model->ngaydang=$request->post('ngaydang');
        $model->noidung=$request->post('noidung');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/thongbao');
        
    }

    public function delete(Request $request,$mathongbao){
        $model=Hoatdong::find($mathongbao);
        $model->delete();
        $request->session()->flash('message','Thông báo deleted');
        return redirect('admin/thongbao');
    }


    //trang khach
    public function index1()
    {
        $result['data']=thongbao::all();
        return view('trangchu/dsthongbao',$result);
    }
    public function show($mathongbao)
    {
        $list = thongbao::where('mathongbao','=',$mathongbao)->select('*')->first();
        return view('trangchu/xemthongbao',compact('list'));
    }
    // trang khach tim kiem thong bao
   public function search()
   {
       $search_text = $_GET['query'];
       $data = DB::table('thongbaos')->where('tieude','LIKE','%'.$search_text.'%')->paginate();
       return view('trangchu/dsthongbao',compact('data'));
   } 
}
