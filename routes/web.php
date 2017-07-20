<?php


Route::get('/', function () {
    return view('welcome');

});

 Route::get('/home', function() {

         $arr = array('chocolates', 'vanillas', 'cherrys');
         $id = array(1, 2,3);
         for($i = 0; $i < 2; $i++) {
             DB::table('products')->where('id', $id[$i])->update(['flavor' => $arr[$i]]);
         }



 });

// Menu Board Routes
Route::get('/menu-board', function() {
   return view('menu-board');
});

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Admin Routes
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('admin');
Route::post('admin/register', 'Auth\RegisterController@register')->middleware('admin');
Route::resource('/admin', 'AdminController', ['middleware' => 'admin']);

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Subscriber Routes
Route::get('/subscriber', function() {
    return view('subscriber.dashboard');
})->middleware('auth');
Route::resource('/subscriber/pricing', 'PricingController', ['middleware' => 'auth']);
Route::resource('/subscriber/specials', 'SpecialController', ['middleware' => 'auth']);
Route::post('subscriber/products/update', 'ProductsController@updateBatch', ['middleware' => 'auth']);
Route::resource('/subscriber/products', 'ProductsController', ['middleware' => 'auth']);
Route::resource('/subscriber/headings', 'HeadingController', ['middleware' => 'auth']);
Route::resource('/subscriber/trash', 'TrashBinController', ['middleware' => 'auth']);
Route::resource('/subscriber/gallery', 'GalleryController', ['middleware' => 'auth']);

