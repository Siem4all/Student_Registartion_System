<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pages;

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

Route::get('/', 'App\Http\Controllers\CastController@home');
Route::get('/#about', 'App\Http\Controllers\CastController@about')->name('#about');
Route::get('/#hero', 'App\Http\Controllers\CastController@hero')->name('#hero');
Route::get('/#services', 'App\Http\Controllers\CastController@service')->name('#services');
Route::get('/#cast', 'App\Http\Controllers\CastController@portfolio')->name('#cast');
Route::get('/#team', 'App\Http\Controllers\CastController@team')->name('#team');
Route::get('/#contact', 'App\Http\Controllers\CastController@contact')->name('#contact');
Route::get('/profile/{id}', 'App\Http\Controllers\CastController@profile');
Auth::routes();
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('admin');
Route::resource('access','App\Http\Controllers\admin\UserController')->middleware('admin');
Route::get('access/form1/{id}','App\Http\Controllers\admin\UserController@formOne')->middleware('admin');
Route::get('access/form2/{id}','App\Http\Controllers\admin\UserController@formTwo')->middleware('admin');

Route::resource('option','App\Http\Controllers\admin\OptionController')->middleware('admin');
Route::resource('section','App\Http\Controllers\admin\SectionController')->middleware('admin');
Route::resource('schedule','App\Http\Controllers\admin\ScheduleController')->middleware('admin');
Route::resource('timetable','App\Http\Controllers\admin\TimetableController')->middleware('admin');
Route::resource('bank','App\Http\Controllers\admin\BankController')->middleware('admin');
Route::resource('account','App\Http\Controllers\admin\AccountController')->middleware('admin');
Route::resource('payment','App\Http\Controllers\admin\PaymentController')->middleware('admin');
Route::resource('message','App\Http\Controllers\admin\MessageController')->middleware('admin');
Route::resource('college','App\Http\Controllers\admin\CollegeController')->middleware('admin');
Route::resource('notice','App\Http\Controllers\admin\NoticeController')->middleware('admin');
Route::post('access/language','App\Http\Controllers\admin\UserController@language')->middleware('admin');
Route::post('access/profession','App\Http\Controllers\admin\UserController@profession')->middleware('admin');
Route::post('access/participation','App\Http\Controllers\admin\UserController@participation')->middleware('admin');
Route::post('access/special','App\Http\Controllers\admin\UserController@specialAbility')->middleware('admin');
Route::post('access/art','App\Http\Controllers\admin\UserController@art')->middleware('admin');
Route::resource('section','App\Http\Controllers\admin\SectionController')->middleware('admin');
Route::get('change-password', 'App\Http\Controllers\admin\ChangePasswordController@index')->middleware('admin');
Route::post('change-password', 'App\Http\Controllers\admin\ChangePasswordController@store')->name('change.password');

Route::get('image-gallery', 'App\Http\Controllers\ImageGalleryController@index')->middleware('admin');
Route::post('image-gallery', 'App\Http\Controllers\ImageGalleryController@upload')->middleware('admin');
Route::delete('image-gallery/{id}', 'App\Http\Controllers\ImageGalleryController@destroy')->middleware('admin');
//user
Route::resource('user_access','App\Http\Controllers\user\UserController');
Route::get('user_access/form1/{id}','App\Http\Controllers\user\UserController@formOne');
Route::get('user_access/form2/{id}','App\Http\Controllers\user\UserController@formTwo');

Route::resource('user_option','App\Http\Controllers\user\OptionController');
Route::resource('user_section','App\Http\Controllers\user\SectionController');
Route::resource('user_schedule','App\Http\Controllers\user\ScheduleController');
Route::resource('user_timetable','App\Http\Controllers\user\TimetableController');
Route::resource('user_bank','App\Http\Controllers\user\BankController');
Route::resource('user_account','App\Http\Controllers\user\AccountController');
Route::resource('user_payment','App\Http\Controllers\user\PaymentController');
Route::resource('user_message','App\Http\Controllers\user\MessageController');
Route::resource('user_college','App\Http\Controllers\user\CollegeController');
Route::resource('user_notice','App\Http\Controllers\user\NoticeController');
Route::post('user_access/language','App\Http\Controllers\user\UserController@language');
Route::post('user_access/profession','App\Http\Controllers\user\UserController@profession');
Route::post('user_access/participation','App\Http\Controllers\user\UserController@participation');
Route::post('user_access/special','App\Http\Controllers\user\UserController@specialAbility');
Route::post('user_access/art','App\Http\Controllers\user\UserController@art');
Route::resource('user_section','App\Http\Controllers\user\SectionController');
Route::get('user_change-password', 'App\Http\Controllers\user\ChangePasswordController@index');
Route::post('user_change-password', 'App\Http\Controllers\user\ChangePasswordController@store')->name('user_change.password');



