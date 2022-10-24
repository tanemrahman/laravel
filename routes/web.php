<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->middleware('ipcheck');

Route::get('/login', function () {
    return view('login');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/post/{id}/{name}',function($id,$name){
    return "Post id is: ".$id." ".$name;
});

Route::get('/post/{name?}',function($name = 'Mobile'){
    return "Post id is: ".$name;
});

Route::get('students/details/example',array('as'=>'students.details',function(){
    $url = route('students.details');
    return "The url is:".$url;
}));

Route::get('user/{id}/profile',function($id){
    $url = route('profile',['id'=>100]);
    return $url;
})->name('profile');

Route::get('student/detail',function(){
    return view("register");
})->name('student.detail');

Route::group(['prefix'=>'service'],function(){
    Route::get('/',function(){
        echo "All Services";
    });

    Route::get('/php',function(){
        echo "PHP Service";
    });

    Route::get('/laravel',function(){
        echo "Laravel Service";
    });
});

Route::get('myarticle',function(){
    $articleName = ["Article 1","Article 2","Article 3"];
    $articlePublished = now();

    return view('Article',compact('articleName','articlePublished'));
});

Route::resource('products',ProductController::class);



Route::get('admin','AdminController@index');
Route::post('admin/auth','AdminController@auth')->name('admin.auth');
Route::group(['middleware'=>'admin_auth'], function(){
    Route::get('admin/dashboard','AdminController@dashboard');
});
