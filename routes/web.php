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
Route::get('/login','Auth\LoginController@index');
Route::post('/login','Auth\LoginController@login')->name('login'); //login button;
Route::post('/logout','Auth\LoginController@logout')->name('adminlogout'); //logout button;

Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/download/{filename}','DashboardController@download');

Route::get('/projects','ProjectsController@index');
Route::get('/project/{id}','ProjectsController@view');
Route::Post('/addproject','ProjectsController@addProject')->name('addProject');

Route::get('/tasks-board','TasksController@board');
Route::Post('/addTask','TasksController@addTask')->name('addTask');
Route::get('/task/{id}','TasksController@view');

Route::get('/tasks-list','TasksController@list');
Route::post('/openedTasks-cheked','TasksController@openedCheckedTasks')->name("openedcheked");
Route::post('/inProgressTasks-cheked','TasksController@inProgressCheckedTasks')->name("inProgresscheked");
Route::post('/closedTasks-cheked','TasksController@closedCheckedTasks')->name("closedcheked");

Route::get('/reports','ReportsController@index');
Route::Post('/addreport','ReportsController@addreport')->name('addReport');

Route::get('/edit-account','UsersController@index');
Route::Post('/updateName' , 'UsersController@changeUserInfo')->name('updateName');

Route::get('/edit-account/profile','UsersController@profile');
Route::Post('/updateImage','UsersController@changeUserImage')->name('updateImage');
Route::get('/edit-account/notifications','UsersController@notifications');
Route::get('/edit-account/changepassword','UsersController@changepassword');


Route::get('/employees','UsersController@employees');

Route::get('/subscription','SubscriptionController@index');
Route::get('/billing-history','SubscriptionController@billingHistory');
Route::get('/billing-upgrade','SubscriptionController@billingUpGrade');
Route::get('/billing-invoice','SubscriptionController@billingInvoice');
Route::get('/billing-payment','SubscriptionController@billingPayment');


Route::get('/announcments','AnnouncementController@index');
Route::Post('/addAnnouncement','AnnouncementController@addAnnouncement')->name('addAnnouncement');
Route::get('/announcement-details/{id}','AnnouncementController@Announcement_details');

Route::get('/email','EmailController@index');
Route::get('/compose-email','EmailController@compose');
Route::get('/email-details/{id}','EmailController@emailView');
Route::post('/sendemail','EmailController@sendEmail')->name('sendemail');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
