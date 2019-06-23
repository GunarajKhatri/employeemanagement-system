<?php


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// |



//Rout::resource('todo','todocontroller');
Route::get('/',function (){
	return  view('welcome');
});

//Employee side
Route::get('/employee/dashboard','employeecontroller@home');
Route::get('/employee/dashboard/task','employeecontroller@task')->name('employee-task');
Route::get('/employee/dashboard/task/view/{id}','employeecontroller@view')->name('employee-view');

	 

//Admin side

Route::get('/adminpanel','adminscontroller@index');
Route::get('/create/user','adminscontroller@create')->name('admin-register');
Route::post('/create/user','adminscontroller@store')->name('admin-register');
Route::get('/adminpanel/{id}','adminscontroller@edit')->name('admin-edit');
Route::get('/adminpanel/delete/{id}','adminscontroller@destroy')->name('admin-delete');
Route::post('/adminpanel/update/{id}','adminscontroller@update')->name('admin-update');
Route::get('/create/task','messagescontroller@create')->name('admin-task');
Route::post('/create/task','messagescontroller@store')->name('admin-task');
Route::get('/create/task/view','messagescontroller@view')->name('admintask-view');
Route::get('/create/task/view/{id}','messagescontroller@fullview')->name('admintask-fullview');
Route::get('/adminpanel/about/company','messagescontroller@about');





//Route::get('/create/show','adminscontroller@show')->name('admin-show');
// Route::get('admin-home',function (){
// 	return  view('admin.ahome');
// });

// Route::post('admin-register','admincontroller@store')->name('admin-register');
// Route::get('admin-register','admincontroller@index')->name('admin-register');
// Route::get('admin-role','rolecontroller@index')->name('admin-role');
// Route::post('admin-role','rolecontroller@store')->name('admin-role');
// Route::get('admin-permission','permissioncontroller@index')->name('admin-permission');
// Route::post('admin-permission','permissioncontroller@store')->name('admin-permission');

// Route::get('admin-register',function (){
// 	return  view('admin.form');
// })->name('admin-register');



// Register routes
 Route::get('/admin',function(){ 
 return view('admin');
  });
 Route::get('/admin-login','admin\Auth\LoginController@showLoginForm')->name('admin.login');
 Route::post('/admin-login/', 'admin\Auth\LoginController@login')->middleware('test');
 Route::post('/admin-logout', 'admin\Auth\LoginController@logout')->name('admin.logout');









 //  Route::get('/post',function(){ 
 // return view('todo.home');
 //  });
 
// Route::get('about','testcontroller@about')->middleware('test:heheheheh');
// Route::get('service','testcontroller@service');
// Route::get('user','paginate@users');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/post','post_controller@store');
// Route::get('/registeruser','registercontroller@index');
// Route::post('/registeruser','registercontroller@store');
// Route::get('/loginuser','registercontroller@show');
// Route::post('/loginuser','registercontroller@login');



 //Route::get('/post','post_controller@index');
// Route::post('/post/comment','comment_controller@store');
//  // $post=post::all();
//  // foreach($post as $posts):
// Route::get('/post/{id}','post_controller@delete');
	
 // endforeach;

