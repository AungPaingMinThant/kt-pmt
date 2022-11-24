<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplePayController;

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

Route::get('/superl0g1n','App\Http\Controllers\AdminLoginController@login');
Route::post('/authlogin','App\Http\Controllers\AdminLoginController@authLogin');

Route::get('/admin/dashboard','App\Http\Controllers\AdminController@dashboard');

Route::get('/admin/categories','App\Http\Controllers\CategoryController@categories');
Route::get('/admin/category/add','App\Http\Controllers\CategoryController@categoryAdd');
Route::post('/admin/category/store','App\Http\Controllers\CategoryController@categoryStore');
Route::post('/admin/category/delete','App\Http\Controllers\CategoryController@categoryDelete');
Route::get('/admin/category/edit/{category_id}','App\Http\Controllers\CategoryController@categoryEdit');
Route::post('/admin/category/update','App\Http\Controllers\CategoryController@categoryUpdate');

Route::get('/admin/blog','App\Http\Controllers\BlogController@blog');
Route::get('/admin/blog/add','App\Http\Controllers\BlogController@blogAdd');
Route::post('/admin/blog/store','App\Http\Controllers\BlogController@blogStore');
Route::post('/admin/blog/delete','App\Http\Controllers\BlogController@blogDelete');
Route::get('/admin/blog/edit/{blog_id}','App\Http\Controllers\BlogController@blogEdit');
Route::post('/admin/blog/update','App\Http\Controllers\BlogController@blogUpdate');

Route::get('/admin/report','App\Http\Controllers\ReportController@report');
Route::get('/admin/report/add','App\Http\Controllers\ReportController@reportAdd');
Route::post('/admin/report/store','App\Http\Controllers\ReportController@reportStore');
Route::post('/admin/report/delete','App\Http\Controllers\ReportController@reportDelete');
Route::get('/admin/report/edit/{report_id}','App\Http\Controllers\ReportController@reportEdit');
Route::post('/admin/report/update','App\Http\Controllers\ReportController@reportUpdate');

Route::get('/admin/pagelist/','App\Http\Controllers\PageController@pageList');
Route::get('/admin/page/mbanking/edit','App\Http\Controllers\AdminMBankingController@mbanking');
Route::post('/admin/mbanking/banner/update','App\Http\Controllers\AdminMBankingController@mbankingBanner');
Route::post('/admin/mbanking/tagline/update','App\Http\Controllers\AdminMBankingController@mbankingTagline');
Route::post('/admin/mbanking/fact/update','App\Http\Controllers\AdminMBankingController@mbankingFact');

Route::get('/admin/logout','App\Http\Controllers\AdminController@logout');

Route::get('/share-post', 'App\Http\Controllers\SharePostController@share');


Route::get('/mobile-banking','App\Http\Controllers\MobileBankingController@mbindex');

Route::get('/internet-banking','App\Http\Controllers\InternetBankingController@index');

Route::get('/debit-card','App\Http\Controllers\DebitCardController@index');

Route::get('/credit-card','App\Http\Controllers\CreditCardController@index');

Route::get('/ecommerce','App\Http\Controllers\EcommerceController@index');

Route::get('/sms-alert','App\Http\Controllers\SMSAlertController@index');

Route::get('/prepaid-card','App\Http\Controllers\PrepaidCardController@index');

Route::get('/simple-pay','App\Http\Controllers\SimplePayController@index');

Route::get('/reset-pin','App\Http\Controllers\ResetPinController@index');

Route::get('/corporate-internet-banking','App\Http\Controllers\CorporateInternetBankingController@index');

