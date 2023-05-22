<?php

use App\Http\Controllers\Admin\AdminPhongController;
use App\Http\Controllers\Admin\OrderPhongController;
use App\Http\Controllers\Admin\OrderAppController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Client\ClientDatPhongController;
use App\Http\Controllers\Client\ClientPhongController;
use App\Http\Controllers\Client\LoginClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;



Route::get('admin/login',[LoginController::class,'login'])
        ->name('adlogin');
Route::post('admin/checklogin',[LoginController::class,'checklogin'])
        ->name('adchecklogin'); 
Route::get('admin/logout',[LoginController::class,'logout'])
        ->name('adlogout');
        
Route::group(['middleware'=>CheckLoginMiddleware::class],
function(){
    Route::name('admin')->group(function(){
    Route::prefix('admin')->group(function(){
    Route::resources([
       'phong'=>AdminPhongController::class,
        'infor'=>OrderPhongController::class,
        'inforapp'=>OrderAppController::class,
        'khachhang'=>KhachHangController::class,
        'danhgia'=>RatingController::class
    ]);
 });
 Route::get('/admin/home',[HomeController::class,'index'])->name('admin.home');
 Route::get('/admin/chart',[HomeController::class,'charts'])->name('admin.chart');
 Route::get('/admin/search',[HomeController::class,'search'])->name('admin.search');
});
}
);


Route::name('client')->group(function(){
    Route::prefix('client')->group(function(){
       Route::resources([
          'phong'=>ClientPhongController::class,
        //   'datphong'=>ClientDatPhongController::class,
       ]);
     
       Route::post('/datphong{sophong}',
    'App\Http\Controllers\Client\ClientDatPhongController@store')->name('datphong');

       Route::post('/rate{sophong}',
    'App\Http\Controllers\Client\ClientDatPhongController@rate')->name('rate');

    Route::get('/viewdatphong{sophong}',
    'App\Http\Controllers\Client\ClientDatPhongController@viewdatphong')->name('viewdatphong');

    Route::get('/index',
    'App\Http\Controllers\Client\ClientPhongController@index');
    });
    
});

Route::get('/test',function(){
        return view('hotel.login');
   });


// Client
// Route::get('/test',function(){
//         return view('hotel.login');
//    })->name('login');
//    Route::post('/register',function(){
//         return view('hotel.registration');
//    })->name("registration");
//    Route::get('/test3',function(){
//         return view('hotel.khachhanginfo');
//    })->name("khachhanginfo");

// Login Client
Route::get('/test',function(){
    return view('hotel.login');
});

Route::get('/test3',function(){
    return view('hotel.lichsudatphong');
});
Route::get('/test2',function(){
    return view('hotel.registration');
})->name("registration");


// Client

// // Phong
Route::get('/register',
'App\Http\Controllers\Client\LoginClientController@next' )->name('next')
;
Route::post('/login',
'App\Http\Controllers\Client\LoginClientController@checkLogin' )->name('CLientcheckLogin')
;
Route::get('/register',
'App\Http\Controllers\Client\LoginClientController@viewLogin' )->name('viewLogin')
;
Route::post('/register',
'App\Http\Controllers\Client\LoginClientController@register' )->name('register')
;
Route::get('/lichsudatphong',
'App\Http\Controllers\Client\LichsudatphongController@viewLichsudatphong' )->name('viewLichsudatphong')
;
Route::get('/editKH',
'App\Http\Controllers\Client\KhachHangController@edit' )->name('editKH')
;
Route::put('/update',
'App\Http\Controllers\Client\KhachHangController@update' )->name('updateKH')
;

Route::get('/logoutclient',[LoginClientController::class,'logout'])
    ->name('logout');





    Route::get('/',function(){
        return view('welcome');
    });