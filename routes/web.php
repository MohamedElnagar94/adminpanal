<?php
use App\Admin;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => ['lang']], function () {
        Route::get('lang/{lang}', function ($lang) {
            session()->has('lang') ? session()->forget('lang') : '';
            $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
            return back();
        });
        Route::group(['middleware' => ['admin']], function () {
            Route::resource('/', 'AdminController');
            Route::resource('/control', 'Admin\controller\AdminControlController');
            Route::get('/logout', 'AdminController@logout')->name('admin.logout');
        });
        Route::group(['middleware' => ['guest']], function () {
            Route::resource('/forgotpassword', 'ForgotPasswordController');
            Route::post('/forgotpassword/create', 'ForgotPasswordController@create')->name('forgotpassword.create');
            Route::get('/forgotpassword/find/{token}', 'ForgotPasswordController@find');
            // Route::get('/forgotpassword/reset', 'ForgotPasswordController@getreset');
            Route::post('/forgotpassword/reset', 'ForgotPasswordController@reset')->name('password.reset');
            Route::resource('/login', 'LoginController');
            Route::resource('/register', 'RegisterController');
        });
    });
});

