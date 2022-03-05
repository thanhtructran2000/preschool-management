<?php

namespace App\Http\Controllers;

use App\Models\Hoatdong;
use App\Models\thongbao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HoatdongController extends Controller
{
    public function index()
    {
        $result['data']=Hoatdong::all();
        return view('admin/hoatdong',$result);
    }

    
    
    public function themhoatdong(Request $request,$mahoatdong='')
    {
        if($mahoatdong>0){
            $arr=Hoatdong::where(['mahoatdong'=>$mahoatdong])->get(); 

            $result['mahoatdong']=$arr['0']->mahoatdong;
            $result['tieude']=$arr['0']->tieude;
            $result['nguoidang']=$arr['0']->nguoidang;
            $result['ngaydang']=$arr['0']->ngaydang;
            $result['noidung']=$arr['0']->noidung;
            $result['image']=$arr['0']->image;
            
           
        }else{
           
            $result['mahoatdong']='';
            $result['tieude']='';
            $result['nguoidang']='';
            $result['ngaydang']='';
            $result['noidung']='';
            $result['image']='';
        }
        return view('admin/themhoatdong',$result);
    }

    public function themhoatdong_process(Request $request)
    {
        //return $request->post();
        if($request->post('mahoatdong')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'tieude'=>'required',
            'image'=>$image_validation,
        ]);

        if($request->post('mahoatdong')>0){
            $model=Hoatdong::find($request->post('mahoatdong'));
            $msg="Hoatdong updated";
        }else{
            $model=new Hoatdong();
            $msg="Hoatdong inserted";
        }

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }

        $model->mahoatdong=$request->post('mahoatdong');
        $model->tieude=$request->post('tieude');
        $model->nguoidang=$request->post('nguoidang');
        $model->ngaydang=$request->post('ngaydang');
        $model->noidung=$request->post('noidung');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/hoatdong');
        
    }

    public function delete(Request $request,$mahoatdong){
        $model=Hoatdong::find($mahoatdong);
        $model->delete();
        $request->session()->flash('message','Hoatdong deleted');
        return redirect('admin/hoatdong');
    }


    
    //trang khach
    public function index1()
    {
        $result['data']=Hoatdong::all();
        return view('trangchu/trangchu1',$result);
    }


    #public function index2() # su dug cho trangchu1.blade.php phan thong bao
    #{
        
      #  $result['data']=Hoatdong::all();
      #  $result['datamahoatdong'] = Hoatdong::whereNotBetween('mahoatdong',[2,10])->get();
       # $result['datamahoatdong2'] = Hoatdong::whereBetween('mahoatdong',[2,10])->get();
       # return view('trangchu/trangchu1',$result);
    #}
    public function show($mahoatdong)
    {
        $list = Hoatdong::where('mahoatdong','=',$mahoatdong)->select('*')->first();
        return view('trangchu/dshoatdong',compact('list'));
    }
    public function index3() # su dug cho xemthemhoatdong.blade.php phan thong bao
    {
        
        $result['data']=Hoatdong::all();
        $result['datathongbao']=thongbao::all();
        return view('trangchu/xemthemhoatdong',$result);
    }

}
