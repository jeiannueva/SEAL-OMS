<?php

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

Route::get('/', function () { return view('welcome');  }); //MAIN HOME PAGE
//Route::get('/public/addmember', 'Members\MembersController\create'); Creation of a member in public format

Auth::routes();
//CORE FUNCTION
Route::get('/home', 'HomeController@index')->name('home');

//API Management
Route::get('/api/sms/balance', 'SMS\SMSController@apibalance');


//All routes and Function for ACTIVITY
Route::get('/activity/create', 'ActivityManager\ActivityController@create'); //Route for displaying activity create
Route::post('/activity/create', 'ActivityManager\ActivityController@store')->name('activity-store'); //Route for storing activity with $request
Route::get('/activity/past', 'ActivityManager\ActivityController@pastactivity')->name('past-activity'); //Route for displaying past activities
Route::get('/activity', 'ActivityManager\ActivityController@activities')->name('activity-list'); //Route for showing all current activities
Route::get('/activity/details/{activity_id}', 'ActivityManager\ActivityController@editform'); //Route for showing details
Route::get('/activity/print/{activity_id}', 'ActivityManager\ActivityController@pprint')->name('activity-print'); //Route for printing activity
Route::post('/activity/delete', 'ActivityManager\ActivityController@delete')->name('activity-delete'); //Route for deleting activities itself
Route::post('/activity/update', 'ActivityManager\ActivityController@update')->name('activity-update'); //Route for updating activities

//All Routes and Function for Members
Route::post('/members/search1', 'Members\MembersController@searchlist1')->name('msearch'); //used for searching with ID
Route::post('/members/search2', 'Members\MembersController@searchlist2')->name('mmsearch'); //used for searching with firstname
Route::post('/members/search3', 'Members\MembersController@searchlist3')->name('search3'); //usef for searching with lastname
Route::get('/members/create', 'Members\MembersController@create'); // used for displaying the members create form
Route::post('/members/create', 'Members\MembersController@store')->name('members-store'); //used for storing the activity itself
Route::get('/members/list', 'Members\MembersController@memberlist')->name('members-list'); //used for displaying the members list
Route::post('/member/update', 'Members\MembersController@update')->name('member-update'); //used for updating the member itself
Route::get('/member/details/{member_id}', 'Members\MembersController@editmember'); //used for showing the details of the member
Route::get('/member/print/{member_id}', 'Members\MembersController@printmember'); //used for printing the detials of the member

//All routes and functions for SMS (This includes SMS Model)
Route::get('/sms/create', 'SMS\SMSController@create')->name('sms-store'); // Used for showing the SMS Create Form
Route::post('/sms/create', 'SMS\SMSController@send'); //Used for sending the SMS itself
Route::get('/sms/credits', 'SMS\SMSController@balance');
Route::get('/sms/profile', 'SMS\SMSController@showprofile')->name('sms-info');

//All routes and functions on creating e-mail
Route::get('/mail/create', 'MAIL\MailController@create')->name('mail-store'); // Used for showing the mail creation page;
Route::post('/mail/create', 'MAIL\MailController@send'); //Will be used on sending emails.
