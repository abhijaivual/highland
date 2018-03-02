<?php


use App\role;
use App\department;
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


//authentication routes
Route::get('/', ['as' => '/', 'uses' => 'AuthController@login']);
Route::post('/login-process', ['as' => '/login-process', 'uses' => 'AuthController@login_process']);
Route::get('/logout', ['as' => '/logout', 'uses' => 'AuthController@logout']);
Route::get('/error-404', ['as' => '/error-404', 'uses' => 'AuthController@error_404']);

//dashboard routes
Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'DashboardController@dashboard']);

/**/

//Registration process 1 routes
Route::get('/registration/process-1/', ['as' => '/registration/process-1/', 'uses' => 'RegisterController@simple_rigisterattion']);
Route::post('/registration-1/submit', ['as' => '/registration/submit', 'uses' => 'RegisterController@register_process1']);
Route::get('/check-empid/{id}', 'RegisterController@check_for_duplicate_employee');
Route::get('/check-emailid/{id}', 'RegisterController@check_for_duplicate_email');
//Registration process 2 routes
Route::get('/registration/process-2/', ['as' => '/registration/process-2/', 'uses' => 'RegisterController@full_rigisterattion']);
Route::post('/registration-2/submit', ['as' => '/registration/submit', 'uses' => 'RegisterController@register_process2']);
Route::get('/sucessfull-registration', ['as' => '/sucessfull-registration', 'uses' => 'RegisterController@successful_registration']);

//profile routes
Route::get('/profile', ['as' => '/profile', 'uses' => 'ProfileController@view_profile']);
Route::get('/search', ['as' => '/search', 'uses' => 'ProfileController@search2']);
Route::get('/view-profile/{id}', ['as' => '/view-profile/{id}', 'uses' => 'ProfileController@single_profile_view']);


Route::get('/profile/edit/{id}', ['as' => '/profile/edit/{id}', 'uses' => 'ProfileController@profile_edit_panel']);
Route::post('/profile/edit/submit/', ['as' => '/profile/edit/submit/', 'uses' => 'ProfileController@profile_edit_submit']);
Route::post('/change/profile/image/', ['as' => '/change/profile/image/', 'uses' => 'ProfileController@profile_image_edit_submit']);


Route::get('/confirm/profile/request/{id}/{id2}', ['as' => '/confirm/profile/request/{id}/{id2}', 'uses' => 'ProfileController@confirm_profile_request']);
Route::get('/reject/profile/request/{id}/{id2}', ['as' => '/reject/profile/request/{id}/{id2}', 'uses' => 'ProfileController@reject_profile_request']);

Route::get('/profile/{id1}/{id2}', ['as' => '/profile/{id1}/{id2}', 'uses' => 'ProfileController@single_profile']);


Route::get('/search/profile/', ['as' => '/search/profile/', 'uses' => 'ProfileController@search_profile']);
Route::get('/profiles/{id}', ['as' => '/profiles/{id}', 'uses' => 'ProfileController@profile_status_profiles']);
Route::get('/full-registration/{id}', ['as' => '/full-registration/{id}', 'uses' => 'ProfileController@full_registration']);
Route::post('/profile/registration-2/submit', ['as' => '/profile/registration-2/submit', 'uses' => 'ProfileController@full_registration_submit']);

Route::get('/profile/status/disable/{id}', ['as' => '/profile/status/{id}', 'uses' => 'ProfileController@change_disable']);
Route::get('/profile/status/enable/{id}', ['as' => '/profile/status/{id}', 'uses' => 'ProfileController@change_enable']);


// preview pdf document route
Route::get('/preview-biodata/{id}', ['as' => '/preview-biodata/{id}', 'uses' => 'ProfileController@preview_pdf_cv']);
Route::post('/preview-address-proof/', ['as' => '/preview-address-proof/', 'uses' => 'ProfileController@preview_pdf_address_proof']);
Route::post('/preview-certificates/', ['as' => '/preview-certificates/', 'uses' => 'ProfileController@preview_pdf_certificates']);
Route::post('/preview-expirience-letter/', ['as' => '/preview-expirience-letter/', 'uses' => 'ProfileController@preview_pdf_expirience_letter']);
Route::post('/preview-pay-slip/', ['as' => '/preview-pay-slip/', 'uses' => 'ProfileController@preview_pdf_pay_slip']);


//documents routes
Route::get('/address-proof/{id}', ['as' => '/address-proof/{id}', 'uses' => 'ProfileController@address_proof']);
Route::get('/certificates/{id}', ['as' => '/certificates/{id}', 'uses' => 'ProfileController@certificates']);
Route::get('/expirience-letters/{id}', ['as' => '/expirience-letters/{id}', 'uses' => 'ProfileController@experience_letters']);
Route::get('/pay-slips/{id}', ['as' => '/pay-slips/{id}', 'uses' => 'ProfileController@pay_slips']);

//upload more documents routes
Route::get('/upload/document/panel/{id}', ['as' => '/upload/document/panel/{id}', 'uses' => 'ProfileController@upload_document_panel']);
Route::post('/upload/document/submit/', ['as' => '/upload/document/submit/', 'uses' => 'ProfileController@upload_document_submit']);

//update documents routes
Route::post('/update/biodata/', ['as' => '/update/biodata/', 'uses' => 'ProfileController@upload_biodata']);
Route::post('/update-document/', ['as' => '/update-document/', 'uses' => 'ProfileController@update_document_panel']);
Route::post('/update/certificate/', ['as' => '/update/certificate/', 'uses' => 'ProfileController@update_certificate_submit']);
Route::post('/update/address-proof/', ['as' => '/update/address-proof/', 'uses' => 'ProfileController@update_address_proof_submit']);
Route::post('/update/expirience-letter/', ['as' => '/update/expirience-letter/', 'uses' => 'ProfileController@update_expirience_letter_submit']);
Route::post('/update/payslip/', ['as' => '/update/payslip/', 'uses' => 'ProfileController@update_payslip_submit']);



Route::get('/myprofile/{id}', ['as' => '/myprofile/{id}', 'uses' => 'ProfileController@my_profile']);
Route::get('/my-resume/{id}', ['as' => '/my-resume/{id}', 'uses' => 'ProfileController@my_resume']);
/*Route::get('/my-experience/{id}', ['as' => '/my-experience/{id}', 'uses' => 'ProfileController@my_experience']);*/
/*Route::get('/my-address-proof/{id}', ['as' => '/my-address-proof/{id}', 'uses' => 'ProfileController@my_address_proof']);*/
/*Route::get('/my-certificates/{id}', ['as' => '/my-certificates/{id}', 'uses' => 'ProfileController@my_certificates']);*/
// Route::get('/my-pay-slips/{id}', ['as' => '/my-pay-slips/{id}', 'uses' => 'ProfileController@my_pay_slips']);

//Attendence routes

Route::get('/upload-attendance', ['as' => '/upload-attendance', 'uses' => 'AttendanceController@upload_attendance']);
Route::post('/import', ['as' => '/import', 'uses' => 'AttendanceController@import_my_excel']);
Route::get('/attendance/table', ['as' => '/attendance/table', 'uses' => 'AttendanceController@view_all_attendance']);
Route::get('/filter/search/', ['as' => '/filter/search/', 'uses' => 'AttendanceController@search2']);
Route::get('/employee/{id}', ['as' => '/employee/{id}', 'uses' => 'AttendanceController@single_employee']);
//Route::get('/my-attendance/{id}/{id}', ['as' => '/employee/{id}', 'uses' => 'AttendanceController@single_employee']);
Route::get('today/attendance/table',['as' => 'today/attendance/table','uses' => 'AttendanceController@view_todays_attendance']);

Route::get('/view/attendance/{empid}/{attid}', ['as' => '/view/attendance/{empid}{/attid}', 'uses' => 'AttendanceController@view_attendance']);
Route::post('/edit-attendance/submit', ['as' => '/edit-attendance/submit', 'uses' => 'AttendanceController@edit_attendance_intime_submit']);

//my attendance list
Route::get('/my/attendance/list/{id}', ['as' => '/my/attendance/list/{id}', 'uses' => 'AttendanceController@my_attendance_list']);

//Settings routes
Route::get('/roles', ['as' => '/roles', 'uses' => 'SettingsController@role']);
Route::post('/add_role', ['as' => '/add_role', 'uses' => 'SettingsController@add_roles']);
Route::get('/edit/role/{id}', ['as' => '/edit/role/{id}', 'uses' => 'SettingsController@edit_role']);
Route::post('/edit-role/submit', ['as' => '/edit/submit', 'uses' => 'SettingsController@edit_role_submit']);
/*Route::get('/remove/role/{id}', ['as' => '/remove/role/{id}', 'uses' => 'SettingsController@remove_role']);*/

Route::get('/departments', ['as' => '/departments', 'uses' => 'SettingsController@department']);
Route::post('/add_department', ['as' => '/add_department', 'uses' => 'SettingsController@add_departments']);
Route::get('/edit/department/{id}', ['as' => '/edit/department/{id}', 'uses' => 'SettingsController@edit_department']);
Route::post('/edit-department/submit', ['as' => '/edit-department/submit', 'uses' => 'SettingsController@edit_department_submit']);
/*Route::get('/remove/department/{id}', ['as' => '/remove/department/{id}', 'uses' => 'SettingsController@remove_department']);*/

Route::get('/designations', ['as' => '/designations', 'uses' => 'SettingsController@designation']);
Route::post('/add_designation', ['as' => '/add_designation', 'uses' => 'SettingsController@add_designations']);
Route::get('/edit/designation/{id}', ['as' => '/edit/designation/{id}', 'uses' => 'SettingsController@edit_designation']);
Route::post('/edit-designation/submit', ['as' => '/edit-designation/submit', 'uses' => 'SettingsController@edit_designation_submit']);
/*Route::get('/remove/designation/{id}', ['as' => '/remove/designation/{id}', 'uses' => 'SettingsController@remove_designation']);*/

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

// return view('myprofile');