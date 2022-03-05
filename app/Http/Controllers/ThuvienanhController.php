<?php

namespace App\Http\Controllers;

use App\Models\thuvienanh;
use App\Models\Hoatdong;
use App\Models\thongbao;
use App\Models\thucdon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThuvienanhController extends Controller
{
    public function index()
    {
        $result['data']=DB::table('thuvienanhs')->paginate(5);
        return view('admin/thuvienanh',$result);
    }

    
    
    public function themthuvienanh(Request $request,$maanh='')
    {
        if($maanh>0){
            $arr=thuvienanh::where(['maanh'=>$maanh])->get(); 

            $result['maanh']=$arr['0']->maanh;
            $result['tieudeanh']=$arr['0']->tieudeanh;
            
            $result['ngaydang']=$arr['0']->ngaydang;
            
            $result['image']=$arr['0']->image;
            
           
        }else{
           
            $result['maanh']='';
            $result['tieudeanh']='';
           
            $result['ngaydang']='';
            
            $result['image']='';
        }
        return view('admin/themthuvienanh',$result);
    }

    public function themthuvienanh_process(Request $request)
    {
        //return $request->post();
        if($request->post('maanh')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'tieudeanh'=>'required',
            'image'=>$image_validation,
        ]);

        if($request->post('maanh')>0){
            $model=thuvienanh::find($request->post('maanh'));
            $msg="Image updated";
        }else{
            $model=new thuvienanh();
            $msg="Image inserted";
        }

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }

        $model->maanh=$request->post('maanh');
        $model->tieudeanh=$request->post('tieudeanh');
       
        $model->ngaydang=$request->post('ngaydang');
       
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/thuvienanh');
        
    }

    public function delete(Request $request,$maanh){
        $model=thuvienanh::find($maanh);
        $model->delete();
        $request->session()->flash('message','Image deleted');
        return redirect('admin/thuvienanh');
    }


    //trang khach
    public function index1()
    {
        #$result['data']=thuvienanh::all();
        $result['data'] = DB::table('thuvienanhs')->paginate(9);
        $result['datathongbao']=thongbao::all();
        
        return view('trangchu/dsthuvienanh',$result);
    }

    public function index2() # su dug cho trangchu1.blade.php phan thu vien anh
    {
        
        $result['datamaanh'] = thuvienanh::whereBetween('maanh',[1,6])->get();
        $result['datamahoatdong'] = Hoatdong::whereNotBetween('mahoatdong',[2,10])->get();
        $result['datamahoatdong2'] = Hoatdong::whereBetween('mahoatdong',[2,10])->get();
        $result['datamathucdon'] = thucdon::whereBetween('mathucdon',[1,6])->get();
        return view('trangchu/trangchu1',$result);
    }
}
