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
Route::post('/login','Auth\LoginController@login')->name('login'); //login button;
Route::post('/logout','Auth\LoginController@logout')->name('adminlogout'); //logout button;
Route::post('/change-password', 'UsersController@changeUserPassword')->name('changepassword')->middleware('auth');

Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/download/{filename}','DashboardController@download');

Route::get('/projects','ProjectsController@index')->middleware('auth');
Route::get('/project-details/{id}','ProjectsController@projectDetails')->middleware('auth');
Route::get('/project/{id}','ProjectsController@view')->middleware('auth');
Route::get('/deleteProject/{id}','ProjectsController@delete')->middleware('auth');
Route::get('/editProject/{id}','ProjectsController@edit')->middleware('auth');
Route::post('/project/comment/{id}','ProjectsController@addComment');

Route::post('/addproject','ProjectsController@addProject')->name('addProject')->middleware('auth');
Route::Patch('/editproject/{id}','ProjectsController@updateProject')->name('editProject')->middleware('auth');
Route::post('/openedProjects-cheked','ProjectsController@activeCheckedprojects')->name("activecheked");
Route::get('/searchProj','ProjectsController@searchActive')->name('searchActiveProjects');
Route::get('/searchArch','ProjectsController@searchArchive')->name('searchArchiveProjects');


Route::get('/tasks-board','TasksController@board')->middleware('auth');
Route::Post('/addTask','TasksController@addTask')->name('addTask')->middleware('auth');
Route::get('/deleteTask/{id}','TasksController@deleteTask')->middleware('auth');
Route::get('/editTask/{id}','TasksController@editTask')->middleware('auth');
Route::patch('/updateTask/{id}','TasksController@updateTask');
Route::get('/task/{id}','TasksController@view')->middleware('auth');
Route::post('/task/comment/{id}','TasksController@addComment')->name('task-comment');


Route::get('/tasks-list','TasksController@list')->middleware('auth');
Route::post('/openedTasks-cheked','TasksController@openedCheckedTasks')->name("openedcheked");
Route::post('/inProgressTasks-cheked','TasksController@inProgressCheckedTasks')->name("inProgresscheked");
Route::post('/closedTasks-cheked','TasksController@closedCheckedTasks')->name("closedcheked");
Route::get('/addreminder/{id}','TasksController@addreminder')->middleware('auth');
Route::get('/reminders','TasksController@reminders')->middleware('auth');
Route::get('/alert/{id}','UsersController@alert')->middleware('auth');
Route::get('/Companyalert/{id}','UsersController@Companyalert')->middleware('auth');


Route::get('/reports','ReportsController@index')->middleware('auth');
Route::get('/deletereports/{id}','ReportsController@deleteReport')->middleware('auth');
Route::get('/editReport/{id}','ReportsController@EditReport')->middleware('auth');
Route::patch('/updateReport/{id}','ReportsController@updateReport');
Route::Post('/addreport','ReportsController@addreport')->name('addReport');
Route::get('/searchReport','ReportsController@searchReport')->name('searchReports')->middleware('auth');

Route::get('/edit-account','UsersController@index')->middleware('auth');
Route::Post('/updateName' , 'UsersController@changeUserInfo')->name('updateName');
Route::get('/notifications','UsersController@notific');

Route::get('/edit-account/profile','UsersController@profile')->middleware('auth');
Route::Post('/updateImage','UsersController@changeUserImage')->name('updateImage');
Route::get('/edit-account/notifications','UsersController@notifications')->middleware('auth');
Route::get('/edit-account/changepassword','UsersController@changepassword')->middleware('auth');
Route::get('/requests','UsersController@requests')->middleware('auth');
Route::post('/requests','UsersController@approve')->name('approveRequests');


Route::get('/employees','UsersController@employees')->middleware('auth');
Route::post('/addemployee','UsersController@addemployee')->name('addEmployee');
Route::post('/changerole','UsersController@changerole')->name('changerole');
Route::get('/search/', 'UsersController@search')->name('searchUser')->middleware('auth');
Route::get('/deleteUser/{id}','UsersController@deleteUser')->middleware('auth');


Route::post('/addcompany','CompanyController@addcompany')->name('addcompany');
Route::get('/deleteCompany/{id}','CompanyController@deleteCompany')->middleware('auth');
Route::post('/editCompany/{id}','CompanyController@editCompany')->name('editCompany');

Route::get('/subscription','SubscriptionController@index')->middleware('auth');
Route::get('/billing-history','SubscriptionController@billingHistory')->middleware('auth');
Route::get('/billing-upgrade','SubscriptionController@billingUpGrade')->middleware('auth');
Route::get('/billing-invoice','SubscriptionController@billingInvoice')->middleware('auth');
Route::get('/billing-payment','SubscriptionController@billingPayment')->middleware('auth');


Route::get('/announcments','AnnouncementController@index')->middleware('auth');
Route::get('/deleteAnnouncments/{id}','AnnouncementController@deleteAnnouncement')->middleware('auth');
Route::get('/Editannouncments/{id}','AnnouncementController@EditAnnouncement')->middleware('auth');
Route::PATCH('/updateAnnouncments/{id}','AnnouncementController@updateAnnouncement');
Route::Post('/addAnnouncement','AnnouncementController@addAnnouncement')->name('addAnnouncement');
Route::get('/announcement-details/{id}','AnnouncementController@Announcement_details')->middleware('auth');
Route::get('/searchannouncments','AnnouncementController@searchAnn')->name('searchannouncments')->middleware('auth');
Route::post('/announcment/comment/{id}','AnnouncementController@addComment')->name('announcment-comment');


Route::get('/email','EmailController@index')->middleware('auth');
Route::get('/compose-email','EmailController@compose')->middleware('auth');
Route::get('/compose-email/{id}','EmailController@composeTo')->middleware('auth');
Route::get('/email-details/{id}','EmailController@emailView')->middleware('auth');
Route::post('/sendemail','EmailController@sendEmail')->name('sendemail');
Route::post('/forwardmail','EmailController@sendforward')->name('sendforward');
Route::get('/email-forward/{id}','EmailController@forward')->middleware('auth');
Route::post('/reply/{id}','EmailController@reply');
Route::get('/email/sent','EmailController@sentMail')->middleware('auth');
Route::get('/email/trash','EmailController@trashMail')->middleware('auth');
Route::get('/delete-mail/{id}','EmailController@delete')->middleware('auth');


Route::get('/events','eventsController@index')->middleware('auth');
Route::post('/addevents','eventsController@addEvent')->name('addevent');

Route::get('/home','mainController@index');
Route::get('/login','mainController@login');

Route::get('/admin/login','mainController@adminLoginView');
Route::post('/admin/login','mainController@adminLogin')->name('OwnerLogin');
Route::get('/admin/OwnersDashboard','mainController@admin');

Route::get('/lostPassword','mainController@lostPassword');
Route::get('/signup','mainController@signup');
Route::get('/subscribe','mainController@subscribe');




//ar
Route::get('/ar/lostPassword','mainController@ArlostPassword');
Route::get('/ar/signup','mainController@Arsignup');
Route::get('/ar/subscribe','mainController@Arsubscribe');
Route::get('/ar/home','mainController@Arindex');
Route::get('/ar/login','mainController@Arlogin');
Route::get('/ar/admin/dashboard','mainController@Aradmin');





Route::get('/ar/home','mainController@Arindex');
Route::get('/ar/login','mainController@Arlogin');
Route::get('/ar/admin','mainController@Aradmin');
Route::get('/ar/lostPassword','mainController@ArlostPassword');
Route::get('/ar/signup','mainController@Arsignup');
Route::get('/ar/Subscribe','mainController@Arsubscribe');

Route::get('/ar/', 'DashboardController@Arindex')->middleware('auth');
Route::get('/ar/download/{filename}','DashboardController@download');

Route::get('/ar/projects','ProjectsController@Arindex');
Route::get('/ar/project/{id}','ProjectsController@Arview');

Route::get('/ar/tasks-board','TasksController@Arboard');
// Route::Post('/ar/addTask','TasksController@AraddTask')->name('addTask');
Route::get('/ar/task/{id}','TasksController@Arview');

Route::get('/ar/tasks-list','TasksController@Arlist');
Route::post('/ar/openedTasks-cheked','TasksController@openedCheckedTasks')->name("openedcheked");
Route::post('/ar/inProgressTasks-cheked','TasksController@inProgressCheckedTasks')->name("inProgresscheked");
Route::post('/ar/closedTasks-cheked','TasksController@closedCheckedTasks')->name("closedcheked");

Route::get('/ar/reports','ReportsController@Arindex');
Route::Post('/ar/addreport','ReportsController@addreport')->name('addReport');

Route::get('/ar/edit-account','UsersController@Arindex');
Route::Post('/ar/updateName' , 'UsersController@changeUserInfo')->name('updateName');

Route::get('/ar/edit-account/profile','UsersController@Arprofile');
Route::Post('/ar/updateImage','UsersController@changeUserImage')->name('updateImage');
Route::get('/ar/edit-account/notifications','UsersController@Arnotifications');
Route::get('/ar/edit-account/changepassword','UsersController@Archangepassword');


Route::get('/ar/employees','UsersController@Aremployees');
Route::post('/employeesthemonth','UsersController@eOfMonth')->name('EOM');

Route::get('/ar/subscription','SubscriptionController@Arindex');
Route::get('/ar/billing-history','SubscriptionController@ArbillingHistory');
Route::get('/ar/billing-upgrade','SubscriptionController@ArbillingUpGrade');
Route::get('/ar/billing-invoice','SubscriptionController@ArbillingInvoice');
Route::get('/ar/billing-payment','SubscriptionController@ArbillingPayment');


Route::get('/ar/announcments','AnnouncementController@Arindex');
Route::get('/ar/announcement-details/{id}','AnnouncementController@ArAnnouncement_details');

Route::get('/ar/email','EmailController@Arindex');
Route::get('/ar/compose-email','EmailController@Arcompose');
Route::get('/ar/email-details/{id}','EmailController@AremailView');
Route::post('/ar/sendemail','EmailController@sendEmail')->name('sendemail');
Route::post('/ar/forwardmail','EmailController@sendforward')->name('sendforward');
Route::get('/ar/email-forward/{id}','EmailController@Arforward');
Route::post('/ar/reply/{id}','EmailController@Arreply');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
