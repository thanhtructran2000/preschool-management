<?php
use App\Http\Controllers\DangnhapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\KhoahocController;
use App\Http\Controllers\GiaovienController;
use App\Http\Controllers\PhutrachController;
use App\Http\Controllers\PhuhuynhController;
use App\Http\Controllers\KhoiController;
use App\Http\Controllers\LopController;
use App\Http\Controllers\HocsinhController;
use App\Http\Controllers\PhongbanController;
use App\Http\Controllers\DangnhapuserController;
use App\Http\Controllers\HososuckhoeController;

use App\Http\Controllers\HoatdongController;
use App\Http\Controllers\ThongbaoController;
use App\Http\Controllers\ThuvienanhController;
use App\Http\Controllers\ThucdonController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});

Route::get('admin',[DangnhapController::class,'index']);
Route::post('admin/auth',[DangnhapController::class,'auth'])->name('admin.auth');

Route::get('admin/logout', function () {
      return redirect('admin');
});

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard',[DangnhapController::class,'dashboard']);
    #Route::get('admin/updatepassword',[DangnhapController::class,'updatepassword']);
    //khóa học
    Route::get('admin/khoahoc',[KhoahocController::class,'index']);
    Route::get('admin/khoahoc/themkhoahoc',[KhoahocController::class,'themkhoahoc']);
    Route::get('admin/khoahoc/themkhoahoc/{makhoa}',[KhoahocController::class,'themkhoahoc']);
    Route::post('admin/khoahoc/themkhoahoc_process',[KhoahocController::class,'themkhoahoc_process'])->name('khoahoc.themkhoahoc_process');
    Route::get('admin/khoahoc/delete/{makhoa}',[KhoahocController::class,'delete']);
    //giaovien
    Route::get('admin/category',[GiaovienController::class,'index']);
    Route::get('admin/category/manage_category',[GiaovienController::class,'manage_category']);
    Route::get('admin/category/manage_category/{magv}',[GiaovienController::class,'manage_category']);
    Route::post('admin/category/manage_category_process',[GiaovienController::class,'manage_category_process'])->name('category.manage_category_process');
    Route::get('admin/category/delete/{magv}',[GiaovienController::class,'delete']);
    # tim kiem ten giao vien phan trang admin
    Route::get('/searchcategory',[GiaovienController::class,'searchtrangadmin']);
    //phụ trách
    Route::get('admin/phutrach',[PhutrachController::class,'index']);
    Route::get('admin/phutrach/themphutrach',[PhutrachController::class,'themphutrach']);
    Route::get('admin/phutrach/themphutrach/{maphutrach}',[PhutrachController::class,'themphutrach']);
    Route::post('admin/phutrach/themphutrach_process',[PhutrachController::class,'themphutrach_process'])->name('phutrach.themphutrach_process');
    Route::get('admin/phutrach/delete/{maphutrach}',[PhutrachController::class,'delete']);
     # tim kiem ten lớp phu trach phan trang admin
     Route::get('/searchphutrach',[PhutrachController::class,'searchtrangadmin']);
    //phụ huynh
    Route::get('admin/phuhuynh',[PhuhuynhController::class,'index']);
    Route::get('admin/phuhuynh/themphuhuynh',[PhuhuynhController::class,'themphuhuynh']);
    Route::get('admin/phuhuynh/themphuhuynh/{maph}',[PhuhuynhController::class,'themphuhuynh']);
    Route::post('admin/phuhuynh/themphuhuynh_process',[PhuhuynhController::class,'themphuhuynh_process'])->name('phuhuynh.themphuhuynh_process');
    Route::get('admin/phuhuynh/delete/{maph}',[PhuhuynhController::class,'delete']);
    # tim kiem ten phu huynh phan trang admin
    Route::get('/searchphuhuynh',[PhuhuynhController::class,'searchtrangadmin']);
   
    //lop
    Route::get('admin/lop',[LopController::class,'index']);
    Route::get('admin/lop/themlop',[LopController::class,'themlop']);
    Route::get('admin/lop/themlop/{malop}',[LopController::class,'themlop']);
    Route::post('admin/lop/themlop_process',[LopController::class,'themlop_process'])->name('lop.themlop_process');
    Route::get('admin/lop/delete/{malop}',[LopController::class,'delete']);
    # tim kiem ten lop phan trang admin
    Route::get('/searchlop',[LopController::class,'searchtrangadmin']);
    # show cac hsinh thuoc lop do
    #Route::get('admin/hocsinh/{malop}',[LopController::class,'showtrangadmin']); # goi lop.blade.php   Loi me roi

    //hoc sinh
    Route::get('admin/hocsinh',[HocsinhController::class,'index']);
    Route::get('admin/hocsinh/themhocsinh',[HocsinhController::class,'themhocsinh']);
    Route::get('admin/hocsinh/themhocsinh/{mahs}',[HocsinhController::class,'themhocsinh']);
    Route::post('admin/hocsinh/themhocsinh_process',[HocsinhController::class,'themhocsinh_process'])->name('hocsinh.themhocsinh_process');
    Route::get('admin/hocsinh/delete/{mahs}',[HocsinhController::class,'delete']);
    # tim kiem ten hoc sinh phan trang admin
    Route::get('/searchhocsinh',[HocsinhController::class,'searchtrangadmin']);
    
   

    //hoạt động
    Route::get('admin/hoatdong',[HoatdongController::class,'index']);
    Route::get('admin/hoatdong/themhoatdong',[HoatdongController::class,'themhoatdong']);
    Route::get('admin/hoatdong/themhoatdong/{mahoatdong}',[HoatdongController::class,'themhoatdong']);
    Route::post('admin/hoatdong/themhoatdong_process',[HoatdongController::class,'themhoatdong_process'])->name('hoatdong.themhoatdong_process');
    Route::get('admin/hoatdong/delete/{mahoatdong}',[HoatdongController::class,'delete']);

    // thông báo
    Route::get('admin/thongbao',[ThongbaoController::class,'index']);
    Route::get('admin/thongbao/themthongbao',[ThongbaoController::class,'themthongbao']);
    Route::get('admin/thongbao/themthongbao/{mathongbao}',[ThongbaoController::class,'themthongbao']);
    Route::post('admin/thongbao/themthongbao_process',[ThongbaoController::class,'themthongbao_process'])->name('thongbao.themthongbao_process');
    Route::get('admin/thongbao/delete/{mathongbao}',[ThongbaoController::class,'delete']);



    // thư viện ảnh
    Route::get('admin/thuvienanh',[ThuvienanhController::class,'index']);
    Route::get('admin/thuvienanh/themthuvienanh',[ThuvienanhController::class,'themthuvienanh']);
    Route::get('admin/thuvienanh/themthuvienanh/{maanh}',[ThuvienanhController::class,'themthuvienanh']);
    Route::post('admin/thuvienanh/themthuvienanh_process',[ThuvienanhController::class,'themthuvienanh_process'])->name('thuvienanh.themthuvienanh_process');
    Route::get('admin/thuvienanh/delete/{maanh}',[ThuvienanhController::class,'delete']);

   


    // thực đơn
    Route::get('admin/thucdon',[ThucdonController::class,'index']);
    Route::get('admin/thucdon/themthucdon',[ThucdonController::class,'themthucdon']);
    Route::get('admin/thucdon/themthucdon/{mathucdon}',[ThucdonController::class,'themthucdon']);
    Route::post('admin/thucdon/themthucdon_process',[ThucdonController::class,'themthucdon_process'])->name('thucdon.themthucdon_process');
    Route::get('admin/thucdon/delete/{mathucdon}',[ThucdonController::class,'delete']);

});



Route::get('/trangchu1',function(){
    return view('trangchu.trangchu1');
}); # vao trang khách
Route::get('/gioithieu',function(){
    return view('trangchu.gioithieu');
}); # vao trang gioithieu
# trang khach phan gioi thieu

Route::get('/lienhe',function(){
    return view('trangchu.lienhe');
}); # vao trang liên hệ

# trang khach phan danh sách
Route::get('/dskhoahoc',[KhoahocController::class,'index1']);
Route::get('/dslop',[LopController::class,'index1']);
# tim kiem ten lop phan trang khach
Route::get('/searchdslop',[LopController::class,'search']);
Route::get('trangchu/dshocsinh/{malop}',[LopController::class,'show']); # goi dslop.blade.php     

Route::get('/dshocsinh',[HocsinhController::class,'index1']);
# tim kiem hocsinh  phan trang khach
Route::get('/searchdshocsinh',[HocsinhController::class,'search']);


Route::get('/dsgvien',[GiaovienController::class,'index1']);
# tim kiem giao viên  phan trang khach
Route::get('/searchdsgvien',[GiaovienController::class,'search']);


Route::get('/phutrachlophoc',[PhutrachController::class,'index1']);
# tim kiem giao viên chủ nhiệm phan trang khach
Route::get('/searchphutrachlophoc',[PhutrachController::class,'search']);




# góc phụ huynh
Route::get('/dsphuhuynh',[PhuhuynhController::class,'index1']);
# tim kiem thông tin phụ huynh phan trang khach
Route::get('/searchdsphuhuynh',[PhuhuynhController::class,'search']);






# trang khach phan hoat động
Route::get('/dshoatdong',[HoatdongController::class,'index1']);



#vao trang chu

#Route::get('/trangchu',[HoatdongController::class,'index2']); # index2 goi trangchu1.blade.php


#vd
Route::get('trangchu/dshoatdong/{mahoatdong}',[HoatdongController::class,'show']); # goi hoatdong.blade.php     dshoatdong 

# xem them hoat dong

Route::get('/xemthemhoatdong',[HoatdongController::class,'index3']);

# phan thông báo
Route::get('/dsthongbao',[ThongbaoController::class,'index1']);
Route::get('trangchu/dsthongbao/{mathongbao}',[ThongbaoController::class,'show']); # goi hoatdong.blade.php     dshoatdong 
Route::get('/searchdsthongbao',[ThongbaoController::class,'search']);




# vao trang khach
Route::get('/trangchu',[ThuvienanhController::class,'index2']); # index2 goi trangchu1.blade.php

# phan danh sach thu vien anh
Route::get('/dsthuvienanh',[ThuvienanhController::class,'index1']);



# thuc don
Route::get('trangchu/dsthucdon/{mathucdon}',[ThucdonController::class,'show']);
    # xem them hoat dong

Route::get('/xemthemthucdon',[ThucdonController::class,'index3']);
