<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplePayController;
use App\Http\Controllers\Admin\AddPointController;
use App\Http\Controllers\Admin\AboutAYA\AwardsController;
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
//Clear route cache:
Route::get('/route-cache', function() {
 $exitCode = Artisan::call('route:cache');
 return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 $exitCode = Artisan::call('config:cache');
 return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
 $exitCode = Artisan::call('cache:clear');
 return 'Application cache cleared';
});

// Clear view cache:F
Route::get('/view-clear', function() {
 $exitCode = Artisan::call('view:clear');
 return 'View cache cleared';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/superl0g1n','App\Http\Controllers\Admin\AdminLoginController@login');
Route::post('/authlogin','App\Http\Controllers\Admin\AdminLoginController@authLogin');

Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard');

// Member List
Route::get('/admin/member','App\Http\Controllers\Admin\MemberController@member');
Route::get('/admin/member/add','App\Http\Controllers\Admin\MemberController@addMember');
Route::get('/admin/member/detail/{id}','App\Http\Controllers\Admin\MemberController@detail');
Route::get('/admin/member/edit/{id}', 'App\Http\Controllers\Admin\MemberController@edit');
// Route::post('/admin/member/delete','App\Http\Controllers\Admin\MemberController@blogDelete');
// Route::get('/admin/member/edit/{blog_id}','App\Http\Controllers\Admin\MemberController@blogEdit');
// Route::post('/admin/member/update','App\Http\Controllers\Admin\MemberController@blogUpdate');

//create member
Route::get('/admin/create','App\Http\Controllers\Admin\CreateMemberController@index');
Route::post('/admin/addmember','App\Http\Controllers\Admin\CreateMemberController@addMember');
// Route::get('/admin/create/edit/{media_id}','App\Http\Controllers\Admin\CreateMemberController@editMedia');
// Route::post('/admin/create/update','App\Http\Controllers\Admin\CreateMemberController@updateMedia');

//add point
Route::get('/admin/addpoints/','App\Http\Controllers\Admin\AddPointController@pageLocation');
Route::get('/admin/addpoints/add','App\Http\Controller\Admin\AddPointController@locationAdd');

//Export
Route::get('/admin/export/list', 'App\Http\Controllers\Admin\ExportController@FAQList');
Route::get('/admin/export/add', 'App\Http\Controllers\Admin\ExportController@FAQAdd');
Route::post('/admin/export/store', 'App\Http\Controllers\Admin\ExportController@FAQStore');
Route::get('/admin/export/{page_slug}/list', 'App\Http\Controllers\Admin\ExportController@FAQListByPageSlug');
Route::get('/admin/export/edit/{faq_id}', 'App\Http\Controllers\Admin\ExportController@FAQEdit');
Route::post('/admin/export/update', 'App\Http\Controllers\Admin\ExportController@FAQUpdate');
Route::get('/admin/export/{page_slug}/add', 'App\Http\Controllers\Admin\ExportController@FAQAddPageSlug');
Route::post('/admin/export/page-slug/store', 'App\Http\Controllers\Admin\ExportController@FAQStorePageSlug');


//logout
Route::get('/admin/logout','App\Http\Controllers\Admin\AdminController@logout');

Route::get('/share-post', 'App\Http\Controllers\SharePostController@share');

Route::any('/','App\Http\Controllers\HomeController@indexNew');

// Redirect
Route::get('/smefinancing ', function () {
    return redirect('/business/borrowing/sme#micro_loan');
});
Route::get('/microloan ', function () {
    return redirect('/business/borrowing/sme#micro_loan');
});

Route::any('/home','App\Http\Controllers\HomeController@indexNew');



